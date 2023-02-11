<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKoleksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('koleksi', function (Blueprint $table) {
            $table->string('kd_koleksi')->primary();
            $table->string('judul');
            $table->string('jns_bahan_pustaka');
            $table->string('jns_koleksi');
            $table->string('jns_media');
            $table->string('pengarang');
            $table->string('penerbit');
            $table->string('tahun');
            $table->string('cetakan');
            $table->string('edisi');
            $table->string('status');
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
        Schema::dropIfExists('koleksi');
    }
}
