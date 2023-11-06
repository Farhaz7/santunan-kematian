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
        Schema::create('profil_user', function (Blueprint $table) {
            $table->id();
            $table->string('nik_meninggal', 16);
            $table->string('nama_meninggal', 100);
            $table->date('tgl_meninggal');
            $table->string('notelp_ahwar', 12);
            $table->string('alamat', 100);
            $table->string('nik_ahwar', 16);
            $table->string('nama_ahwar', 100);
            $table->string('kecamatan', 100);
            $table->string('kelurahan', 100);
            $table->string('kedudukan', 100);

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
        Schema::dropIfExists('profil-_users');
    }
};
