<?php

namespace App\Http\Controllers;

use App\Models\UploadBerkasUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UploadController extends Controller
{
    public function upload(Request $request)
    {

        $user = Auth::user();
    
            $extension1 = $request->file('surat_pengantar')->getClientOriginalExtension();
            $file1 =  'surat_pengantar' . '-' . '' . now()->timestamp . '.' . $extension1;
            $request->file('surat_pengantar')->storeAs( '', $file1);

            $extension2 = $request->file('surat_ahwa')->getClientOriginalExtension();
            $file2 =  'surat_ahwa' . '-' . '' . now()->timestamp . '.' . $extension2;
            $request->file('surat_ahwa')->storeAs( '', $file2);

            $extension3 = $request->file('surat_tdk_mampu')->getClientOriginalExtension();
            $file3 =  'surat_tdk_mampu' . '-' . '' . now()->timestamp . '.' . $extension3;
            $request->file('surat_tdk_mampu')->storeAs( '', $file3);

            $extension4 = $request->file('fc_ktp_meninggal')->getClientOriginalExtension();
            $file4 =  'fc_ktp_meninggal' . '-' . '' . now()->timestamp . '.' . $extension4;
            $request->file('fc_ktp_meninggal')->storeAs( '', $file4);

            $extension5 = $request->file('fc_ktp_ahwa')->getClientOriginalExtension();
            $file5 =  'fc_ktp_ahwa' . '-' . '' . now()->timestamp . '.' . $extension5;
            $request->file('fc_ktp_ahwa')->storeAs( '', $file5);

            $extension6 = $request->file('fc_kk_meninggal')->getClientOriginalExtension();
            $file6 =  'fc_kk_meninggal' . '-' . '' . now()->timestamp . '.' . $extension6;
            $request->file('fc_kk_meninggal')->storeAs( '', $file6);

            $extension7 = $request->file('fc_akte_meninggal')->getClientOriginalExtension();
            $file7 =  'fc_akte_meninggal' . '-' . '' . now()->timestamp . '.' . $extension7;
            $request->file('fc_akte_meninggal')->storeAs('', $file7);

            $extension8 = $request->file('fc_kk_ahwa')->getClientOriginalExtension();
            $file8 =  'fc_kk_ahwa' . '-' . '' . now()->timestamp . '.' . $extension8;
            $request->file('fc_kk_ahwa')->storeAs( '', $file8);


            UploadBerkasUsers::create([
                'user_id' => $user->id,
                'surat_pengantar' => $file1,
                'surat_ahwa' => $file2,
                'surat_tdk_mampu' => $file3,
                'fc_ktp_meninggal' => $file4,
                'fc_ktp_ahwa' => $file5,
                'fc_kk_meninggal' => $file6,
                'fc_akte_meninggal' => $file7,
                'fc_kk_ahwa' => $file8
            ]);
            toastr()->success('Permohonan Berhasil Dikirim!');
            return redirect('/home');
        
    }
}

   
        
    