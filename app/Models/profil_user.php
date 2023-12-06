<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Psy\Readline\Hoa\ProtocolException;

class profil_user extends Model
{
    protected $table ="profil_user";
    protected $primarykey ="id";
    protected $fillable=[
    'nik_meningal','nama_meninggal','tgl_meninggal','alamat_meninggal','kelurahan_meninggal','kecamatan_meninggal','notelp_ahwa','alamat_ahwa','nik_ahwa','nama_ahwa','kelurahan_ahwa','kecamatan_ahwa','kedudukan'];
}
