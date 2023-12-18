<?php

namespace App\Http\Controllers;

use App\Models\UploadBerkasUsers;
use App\Models\User;
use Illuminate\Http\Request;

class DataPengajuanController extends Controller
{
    public function dbpengajuan($id)
    {
            $berkasuser = UploadBerkasUsers::find($id);
            return view('dbpengajuan', compact('berkasuser'));
    }

    public function berkasditerima($id)
    {
            $berkasuser = UploadBerkasUsers::find($id);
            $berkasuser->status_berkas='1';
            $berkasuser->save();   
            return redirect('dbadmin');
    }

    public function berkasdiperbaiki($id)
    {
            $berkasuser = UploadBerkasUsers::find($id);
            $berkasuser->status_berkas='2';
            $berkasuser->save();
            return redirect('dbadmin');
    }

    public function berkasditolak($id)
    {
            $berkasuser = UploadBerkasUsers::find($id);
            $berkasuser->status_berkas='3';
            $berkasuser->save();
            return redirect('dbadmin');
    }
}
