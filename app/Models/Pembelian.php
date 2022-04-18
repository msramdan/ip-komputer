<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    use HasFactory;
    protected $table = 'pembelian';
    protected $fillable = [
        'kode_pembelian',
        'supplier_id ',
        'tanggal',
        'grand_total',
        'diskon',
        'total',
        'catatan',
        'status_bayar',
    ];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

}
