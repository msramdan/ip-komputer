<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;
    protected $table = 'penjualan';
    protected $fillable = ['invoice','produk_id', 'customer_id', 'tanggal', 'grand_total', 'diskon', 'total', 'catatan', 'status_bayar', 'pengiriman','no_resi'];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public const CREATED ="created";
    public const CONFIRMED ="confirmed";
    public const DELIVERED ="delivered";
    public const COMPLETED ="completed";
    public const CANCELLED ="cancelled";
    public const PAID ="paid";
    public const UNPAID ="unpaid";


    public function produk()
    {
        return $this->belongsTo(Produk::class);
    }
}


