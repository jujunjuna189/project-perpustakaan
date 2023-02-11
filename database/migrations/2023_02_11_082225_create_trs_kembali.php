<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrsKembali extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trs_kembali', function (Blueprint $table) {
            $table->string('no_transaksi_kembali')->primary();
            $table->string('kd_anggota');
            $table->string('nm_pengguna');
            $table->date('tg_pinjam');
            $table->date('tg_kembali');
            $table->string('kd_koleksi');
            $table->string('judul');
            $table->string('jns_bhn_pustaka');
            $table->string('jns_koleksi');
            $table->string('jns_media');
            $table->double('denda');
            $table->string('ket');
            $table->integer('id_pengguna');
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
        Schema::dropIfExists('trs_kembali');
    }
}
