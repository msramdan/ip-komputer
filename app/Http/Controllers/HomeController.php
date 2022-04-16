<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $jml_produk = DB::table("produk")
            ->count();
        $jml_kategori = DB::table("kategori")
            ->count();
        $jml_user = DB::table("users")
            ->count();
        $jml_role = DB::table("roles")
            ->count();

        return view('home.index', [
            'jml_produk' => $jml_produk,
            'jml_kategori' => $jml_kategori,
            'jml_user' => $jml_user,
            'jml_role' => $jml_role,
        ]);
    }
}
