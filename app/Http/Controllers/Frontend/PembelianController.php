<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Kavist\RajaOngkir\Facades\RajaOngkir;

class PembelianController extends Controller
{
    public function index (){
        return view('frontend.pembelian');
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
        // $output = '';
        // $output .= '<select class="form-control kota-asal" id="kota_id" name="kota_id"><option value="">-- Pilih --</option>';
        // foreach ($cost[0] as $row) {
        //     $output .= '<option value=""> ' . $row['costs']->name . '</option>';
        // }
        // $output .= '</select>';

        // echo $output;
    }
}
