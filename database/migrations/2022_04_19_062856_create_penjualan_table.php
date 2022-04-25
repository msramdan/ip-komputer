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
            $table->string('invoice',50);
            $table->foreignId('customer_id')->constrained('customer');
            $table->foreignId('customer_alamat_id')->constrained('customer_alamat');
            $table->date('tanggal_pembelian');
            $table->integer('sub_total');
            $table->integer('ongkir');
            $table->integer('diskon')->nullable();
            $table->integer('grand_total');
            $table->string('catatan');
            $table->string('status',30);
            $table->string('status_bayar',30);
            $table->string('jasa_kirim',30);
            $table->string('nama_service',30);
            $table->string('no_resi',50);
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
