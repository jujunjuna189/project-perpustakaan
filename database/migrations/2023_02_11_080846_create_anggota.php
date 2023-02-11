<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnggota extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggota', function (Blueprint $table) {
            $table->string('kd_anggota')->primary();
            $table->string('nm_anggota');
            $table->enum('jk', ['Laki-Laki', 'Perempuan']);
            $table->string('tp_lahir');
            $table->date('tgl_lahir');
            $table->text('alamat');
            $table->string('no_hp');
            $table->string('jns_id');
            $table->string('no_id');
            $table->string('jns_anggota');
            $table->string('status');
            $table->integer('jml_pjm');
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
        Schema::dropIfExists('anggota');
    }
}
