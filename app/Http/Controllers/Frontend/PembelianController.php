<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Penjualan;
use Illuminate\Http\Request;
use Kavist\RajaOngkir\Facades\RajaOngkir;
use PDF; //library pdf
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class PembelianController extends Controller
{
    public function index()
    {
        return view('frontend.pembelian');
    }

    public function export($id)
    {
        $penjualan = DB::table('penjualan')
            ->join('customer', 'customer.id', '=', 'penjualan.customer_id')
            ->join('customer_alamat', 'customer_alamat.id', '=', 'penjualan.customer_alamat_id')
            ->join('provinsis', 'provinsis.id', '=', 'customer_alamat.provinsi_id')
            ->join('kota_kabupatens', 'kota_kabupatens.id', '=', 'customer_alamat.kota_id')
            ->select('penjualan.*', 'customer.nama as nama_customer','customer.email as email_customer','customer.telpon as telpon_customer', 'provinsis.nama as nama_provinsi', 'kota_kabupatens.nama as nama_kota', 'customer_alamat.alamat_lengkap')
            ->where('penjualan.id', $id)->first();
        $toko = DB::table('setting_toko')
                ->first();
        $detail = DB::table('penjualan_detail')
        ->join('produk', 'produk.id', '=', 'penjualan_detail.produk_id')
        ->select('penjualan_detail.*', 'produk.kode_produk' ,'produk.nama as nama_produk')
        ->where('penjualan_detail.penjualan_id', $id)->get();

        $data = PDF::loadview('Frontend.invoice', [
            'data' => $penjualan,
            'toko' => $toko,
            'detailItem' =>$detail
        ]);
        return $data->download('invoice-'.$penjualan->invoice.'.pdf');
        // return view('Frontend.invoice', [
        //     'data' => $penjualan,
        //     'toko' => $toko,
        //     'detailItem' =>$detail
        // ]);
    }

    public function check_ongkir(Request $request)
    {
        $cost = RajaOngkir::ongkosKirim([
            'origin'        => $request->city_origin,
            'destination'   => $request->city_destination, // ID kota/kabupaten tujuan
            'weight'        => $request->weight, // berat barang dalam gram
            'courier'       => $request->courier // kode kurir pengiriman: ['jne', 'tiki', 'pos'] untuk starter
        ])->get();
        return response()->json($cost);
    }
}
