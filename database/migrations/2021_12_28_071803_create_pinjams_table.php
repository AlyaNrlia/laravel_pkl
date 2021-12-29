<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePinjamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pinjams', function (Blueprint $table) {
            $table->id();
            $table->string('id_pinjam');
            $table->date('tgl_pinjam');
            $table->bigInteger('barang_id')->unsigned();
            $table->foreign('barang_id')
                  ->references('id')
                  ->on('barangs');
            $table->string('nama_barang');
            $table->string('kategori');
            $table->bigInteger('jumlah');
            $table->string('nama_peminjam');
            $table->date('tgl_kembali');
            
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
        Schema::dropIfExists('pinjams');
    }
}
