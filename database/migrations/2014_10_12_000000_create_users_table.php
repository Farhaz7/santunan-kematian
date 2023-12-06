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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('role',1)->default('2');
            $table->string('nama_meninggal');
            $table->string('nik_meninggal');
            $table->string('password');
            $table->string('email')->nullable();
            $table->string('tgl_meninggal')->nullable();
            $table->string('alamat_meninggal')->nullable();
            $table->string('kelurahan_meninggal')->nullable();
            $table->string('kecamatan_meninggal')->nullable();
            $table->string('alamat_ahwa')->nullable();
            $table->string('notelp_ahwa')->nullable();
            $table->string('nik_ahwa')->nullable();
            $table->string('nama_ahwa')->nullable();
            $table->string('kelurahan_ahwa')->nullable();
            $table->string('kecamatan_ahwa')->nullable();
            $table->string('kedudukan')->nullable();
            $table->string('aktivasi')->default('0');
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
        Schema::dropIfExists('users');
    }
};
