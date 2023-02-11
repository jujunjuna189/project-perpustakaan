<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrsPinjam extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trs_pinjam', function (Blueprint $table) {
            $table->string('no_transaksi_pinjam')->primary();
            $table->string('kd_anggota');
            $table->string('nm_anggota');
            $table->date('tg_pinjam');
            $table->date('tg_bts_kembali');
            $table->string('kd_koleksi');
            $table->string('judul');
            $table->string('jns_bhn_pustaka');
            $table->string('jns_koleksi');
            $table->string('jns_media');
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
        Schema::dropIfExists('trs_pinjam');
    }
}
