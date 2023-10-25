<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Psy\Readline\Hoa\ProtocolException;

class profil_user extends Model
{
    protected $table ="prfil_user";
    protected $primarykey ="id";
    protected $fillable=[
    'nik_meninggal','nama_meninggal','tg;_meninggal','notelp_ahwar','alamat','nik_ahwar','nama_ahwar','kelurahan','kecamatan','kedudukan'];
}
