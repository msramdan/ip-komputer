<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjualan', function (Blueprint $table) {
            $table->id();
            $table->string('kode_penjualan',20);
            $table->foreignId('produk_id')->constrained('produk');
            $table->foreignId('customer_id')->constrained('customer');
            $table->date('tanggal');
            $table->integer('grand_total');
            $table->integer('diskon');
            $table->integer('total');
            $table->string('catatan');
            $table->string('status_bayar');
            $table->string('pengiriman');
            $table->string('no_resi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penjualan');
    }
};
