<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use Illuminate\Support\Facades\DB;
use App\Models\Produk;

use Illuminate\Http\Request;


class DashboardCrontroller extends Controller
{

    public function index(Request $request)
    {
        $Kategori = Kategori::all();
        // create produk paginate
        $produk = Produk::latest()->paginate(9);
        // $produk = Produk::;
        return view('frontend.index',[
            'kategori' => $Kategori,
            'produk' => $produk
        ]);
    }

    public function DetailProduk($id,$slug)
    {

        $data =Produk::with('kategori:id,nama_kategori', 'unit:id,nama_unit')
                ->where('id', $id)->first();
        $photo = DB::table('produk_photo')
            ->where('produk_id', '=', $data->id)
            ->get();
        $relate =Produk::where('kategori_id', $data->kategori_id)
                        ->where('id', '!=', $data->id)
                        ->limit(5)->get();
        return view('frontend.detail-produk',[
            'data' => $data,
            'photo' => $photo,
            'relate' => $relate,
        ]);
    }
}
