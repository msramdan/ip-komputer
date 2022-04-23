<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class CartController extends Controller
{
    public function cartList()
    {
        if (Session::get('login-customer')) {
            $cartItems = \Cart::getContent();
            // dd($cartItems);
            return view('frontend.cart', compact('cartItems'));
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
            return redirect()->route('cart.list');
        } else {
            Alert::error('Failed', 'Silahkan login terlebih dahulu');
            return redirect()->back();
        }
    }
}
