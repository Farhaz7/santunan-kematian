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
        Schema::create('file_submissions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('Users');
            $table->string('surat_pengantar');
            $table->string('surat_ahwa');
            $table->string('surat_tdk_mampu');
            $table->string('fc_ktp_meninggal');
            $table->string('fc_ktp_ahwa');
            $table->string('fc_kk_meninggal');
            $table->string('fc_akte_meninggal');
            $table->string('fc_kk_ahwa');
            $table->string('status_berkas')->default('0');
            $table->string('status_pengajuan')->default('0');
            $table->string('keterangan_pengajuan')->default('');
            $table->string('tanggal_pencairan')->nullable();
            $table->string('foto')->nullable();
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
        Schema::dropIfExists('file_submission');
    }
};
