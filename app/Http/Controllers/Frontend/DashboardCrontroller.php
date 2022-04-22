<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use App\Models\Produk;

use Illuminate\Http\Request;


class DashboardCrontroller extends Controller
{

    public function index(Request $request)
    {
        $Kategori = Kategori::all();
        $produk = Produk::all();
        return view('frontend.index',[
            'kategori' => $Kategori,
            'produk' => $produk
        ]);
    }

    public function DetailProduk($id,$slug)
    {

        $data = Produk::where('id', $id)->first();
        return view('frontend.detail-produk',[
            'data' => $data,
        ]);
    }
}
