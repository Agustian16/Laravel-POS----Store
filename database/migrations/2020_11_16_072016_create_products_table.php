<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('kd_barang');
            $table->string('nama_barang');
            $table->unsignedBigInteger('kd_merek')->nullable();
            $table->string('kd_distributor')->nullable();
            $table->date('tanggal_masuk');
            $table->string('harga_barang');
            $table->string('harga_beli');
            $table->string('harga_jual');
            $table->string('stok_barang');
            $table->text('keterangan');
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
        Schema::dropIfExists('products');
    }
}
