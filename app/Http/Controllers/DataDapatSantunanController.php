<?php

namespace App\Http\Controllers;

use App\Models\UploadBerkasUsers;
use App\Models\User;
use Illuminate\Http\Request;

class DataDapatSantunanController extends Controller
{
    function dbdapatsantunan()
    {
        $usersWithUploads = UploadBerkasUsers::where('status_berkas','1')->get();
        return view('dbdapatsantunan',compact('usersWithUploads'));
    }

    public function pengajuandiproses($id)
    {
            $berkasuser = UploadBerkasUsers::find($id);
            $berkasuser->status_pengajuan='0';
            $berkasuser->save();   
            return redirect('dbadmin');
    }

    public function pengajuandicairkan($id)
    {
            $berkasuser = UploadBerkasUsers::find($id);
            $berkasuser->status_pengajuan='1';
            $berkasuser->save();   
            return redirect('dbadmin');
    }

    public function pengajuandiperbaiki($id)
    {
            $berkasuser = UploadBerkasUsers::find($id);
            $berkasuser->status_pengajuan='2';
            $berkasuser->save();   
            return redirect('dbadmin');
    }

    public function pengajuanditolak($id)
    {
            $berkasuser = UploadBerkasUsers::find($id);
            $berkasuser->status_pengajuan='3';
            $berkasuser->save();   
            return redirect('dbadmin');
    }
}
