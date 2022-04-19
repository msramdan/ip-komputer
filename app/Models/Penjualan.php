<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;
    protected $table = 'penjualan';
    protected $fillable = ['kode_penjualan', 'customer_id', 'tanggal', 'grand_total', 'diskon', 'total', 'catatan', 'status_bayar', 'pengiriman'];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}


