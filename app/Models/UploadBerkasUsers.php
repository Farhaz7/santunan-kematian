<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UploadBerkasUsers extends Model
{
   use HasFactory;

   protected $table= 'file_submissions';
   protected $fillable = [
    'user_id',
    'surat_pengantar',
    'surat_ahwa',
    'surat_tdk_mampu',
    'fc_ktp_meninggal',
    'fc_ktp_ahwa',
    'fc_kk_meninggal',
    'fc_akte_meninggal',
    'fc_kk_ahwa', 
    'status_berkas',
    'status_pengajuan', 
    'keterangan_pengajuan',
   ];
   public function user()
    {
        return $this->hasOne(User::class, 'user_id','id');
    }
}