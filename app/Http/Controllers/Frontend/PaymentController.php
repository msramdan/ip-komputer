<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\Transaksi;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class PaymentController extends Controller
{
    public function notification(Request $request)
    {

        $payload = $request->getContent();
        $notification = json_decode($payload);

        // $validSignatureKey = hash("sha512", $notification->order_id . $notification->status_code . $notification->gross_amount . env('MIDTRANS_SERVER_KEY'));
        // if ($notification->signature_key != $validSignatureKey) {
        //     return response(['message' => 'Invalid signature'], 403);
        // }

        $this->initPaymentGateway();
        $statusCode = null;

        $paymentNotification = new \Midtrans\Notification();
        $order = Transaksi::where('invoice', $paymentNotification->order_id)->firstOrFail();
        $cek_status = $order->status_bayar;
        // ambil id Transaksi


        if($cek_status=='paid'){
            return response(['message' => 'The order has been paid before'], 422);
        }

        $transaction = $paymentNotification->transaction_status;

        $type = $paymentNotification->payment_type;
        $orderId = $paymentNotification->order_id;
        $fraud = $paymentNotification->fraud_status;

        $vaNumber = null;
        $vendorName = null;
        if (!empty($paymentNotification->va_numbers[0])) {
            $vaNumber = $paymentNotification->va_numbers[0]->va_number;
            $vendorName = $paymentNotification->va_numbers[0]->bank;
        }

        $paymentStatus = null;
        if ($transaction == 'capture') {
            // For credit card transaction, we need to check whether transaction is challenge by FDS or not
            if ($type == 'credit_card') {
                if ($fraud == 'challenge') {
                    // TODO set payment status in merchant's database to 'Challenge by FDS'
                    // TODO merchant should decide whether this transaction is authorized or not in MAP
                    $paymentStatus = Payment::CHALLENGE;
                } else {
                    // TODO set payment status in merchant's database to 'Success'
                    $paymentStatus = Payment::SUCCESS;
                }
            }
        } else if ($transaction == 'settlement') {
            // TODO set payment status in merchant's database to 'Settlement'
            $paymentStatus = Payment::SETTLEMENT;
        } else if ($transaction == 'pending') {
            // TODO set payment status in merchant's database to 'Pending'
            $paymentStatus = Payment::PENDING;
        } else if ($transaction == 'deny') {
            // TODO set payment status in merchant's database to 'Denied'
            $paymentStatus = PAYMENT::DENY;
        } else if ($transaction == 'expire') {
            // TODO set payment status in merchant's database to 'expire'
            $paymentStatus = PAYMENT::EXPIRE;
        } else if ($transaction == 'cancel') {
            // TODO set payment status in merchant's database to 'Denied'
            $paymentStatus = PAYMENT::CANCEL;
        }

        $table = "payments";
        $primary = "number";
        $prefix = "PAY-";
        $date = date('dmy');
        $q = DB::table($table)->select(DB::raw('MAX(RIGHT(' . $primary . ',5)) as kd_max'));
        $prx = $prefix . $date;
        if ($q->count() > 0) {
            foreach ($q->get() as $k) {
                $tmp = ((int)$k->kd_max) + 1;
                $kd = $prx.'-'. sprintf("%06s", $tmp);
            }
        } else {
            $kd = $prx . '-' . "000001";
        }


        $paymentParams = [
            'transaksi_id' => $order->id,
            'number' => $kd,
            'amount' => $paymentNotification->gross_amount,
            'method' => 'midtrans',
            'status' => $paymentStatus,
            'token' => $paymentNotification->transaction_id,
            'payloads' => $payload,
            'payment_type' => $paymentNotification->payment_type,
            'va_number' => $vaNumber,
            'vendor_name' => $vendorName,
            'biller_code' => $paymentNotification->biller_code,
            'bill_key' => $paymentNotification->bill_key,
        ];

        $payment = Payment::create($paymentParams);

        if ($paymentStatus && $payment) {
            DB::transaction(
                function () use ($order, $payment) {
                    if (in_array($payment->status, [Payment::SUCCESS, Payment::SETTLEMENT])) {
                        $order->status_bayar = Transaksi::PAID;
                        $order->status = Transaksi::CONFIRMED;
                        $order->save();
                        // update stok
                        $transaksi_id = $order->id;
                        $detailItem = DB::table('transaksi_detail')
                            ->where('transaksi_id', '=', $transaksi_id)
                            ->get();
                        foreach ($detailItem as $row) {
                            $product = Produk::find($row->produk_id);
                            $product->decrement('qty', $row->qty);
                        }
                    }
                }
            );


        }

        $message = 'Payment status is : ' . $paymentStatus;

        $response = [
            'code' => 200,
            'message' => $message,
        ];

        return response($response, 200);
    }

    public function completed(Request $request)
	{
		$code = $request->query('order_id');
		$order = Transaksi::where('invoice', $code)->firstOrFail();

		if ($order->payment_status == Transaksi::UNPAID) {
			return redirect('payments/failed?order_id='. $code);
		}
        Alert::success('Success', 'Thank you for completing the payment process!');
		return redirect('dashboard');
	}


    public function unfinish(Request $request)
	{
		$code = $request->query('order_id');
		$order = Transaksi::where('invoice', $code)->firstOrFail();
        Alert::error('Failed', 'Sorry, we couldnt process your payment.');

		return redirect('dashboard');
	}

    public function failed(Request $request)
	{
		$code = $request->query('order_id');
		$order = Transaksi::where('invoice', $code)->firstOrFail();
        Alert::error('Failed', 'Sorry, we couldnt process your payment.');
		return redirect('dashboard');
	}
}
