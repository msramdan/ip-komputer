<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Provinsi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function cartList()
    {
        if (Session::get('login-customer')) {
            $cartItems = \Cart::getContent();
            // dd($cartItems);
            $provinsi = Provinsi::pluck('nama', 'provinsi_id');
            $customer_id =Session::get('id-customer');
            $alamat = DB::table('customer_alamat')
            ->join('provinsis', 'provinsis.id', '=', 'customer_alamat.provinsi_id')
            ->join('kota_kabupatens', 'kota_kabupatens.id', '=', 'customer_alamat.kota_id')
            ->select('customer_alamat.*', 'provinsis.nama as nama_provinsi', 'kota_kabupatens.nama as nama_kota')
            ->where('customer_alamat.customer_id', '=', $customer_id)
            ->get();

            return view('frontend.cart', [
                'cartItems' => $cartItems,
                'provinsi' => $provinsi,
                'alamat' => $alamat
            ]);
        } else {
            Alert::error('Failed', 'Silahkan login terlebih dahulu');
            return redirect()->back();
        }
    }

    public function addToCart(Request $request)
    {
        if (Session::get('login-customer')) {
            \Cart::add([
                'id' => $request->id,
                'name' => $request->nama,
                'price' => $request->harga,
                'quantity' => $request->quantity,
                'attributes' => array(
                    'image' => $request->photo,
                )
            ]);
            return redirect()->route('cart.list');
        } else {
            Alert::error('Failed', 'Silahkan login terlebih dahulu');
            return redirect()->back();
        }
    }

    public function updateCart(Request $request)
    {

        // dd($request->all());

        if (Session::get('login-customer')) {
            \Cart::update(
                $request->id,
                [
                    'quantity' => [
                        'relative' => false,
                        'value' => $request->quantity
                    ],
                ]
            );
            return redirect()->route('cart.list');
        } else {
            Alert::error('Failed', 'Silahkan login terlebih dahulu');
            return redirect()->back();
        }
    }

    public function removeCart(Request $request)
    {
        if (Session::get('login-customer')) {
            \Cart::remove($request->id);
            return redirect()->route('cart.list');
        } else {
            Alert::error('Failed', 'Silahkan login terlebih dahulu');
            return redirect()->back();
        }
    }

    public function clearAllCart()
    {
        if (Session::get('login-customer')) {
            \Cart::clear();
            return redirect()->back();
        } else {
            Alert::error('Failed', 'Silahkan login terlebih dahulu');
            return redirect()->back();
        }
    }
}
