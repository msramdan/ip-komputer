<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use Illuminate\Http\Request;


class DashboardCrontroller extends Controller
{

    public function index(Request $request)
    {
        $Kategori = Kategori::all();
        return view('frontend.index',[
            'kategori' => $Kategori
        ]);
    }
}
