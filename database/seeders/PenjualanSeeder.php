<?php

namespace Database\Seeders;

use App\Models\Penjualan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Penjualan::create([
            'kode_penjualan' => 'PNJ001',
            'produk_id' => 1,
            'customer_id' => 1,
            'tanggal' => date('y-m-d'),
            'grand_total' => 1000000,
            'diskon' => 0,
            'total' => 1000000,
            'catatan' => 'Catatan',
            'status_bayar' => 'Belum Bayar',
            'pengiriman' => 'JNE',
        ]);
    }
}
