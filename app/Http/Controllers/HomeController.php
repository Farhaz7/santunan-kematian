<?php

namespace App\Http\Controllers;

use App\Models\UploadBerkasUsers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $user=Auth::user();
        $id=$user->id;
        $berkas=UploadBerkasUsers::find($id);

        $berkasuser = UploadBerkasUsers::where('user_id',$id)->get();
        return view('dbuser',compact('id','berkas','berkasuser'));
    }

    public function index_admin()
    {
        // $usersWithUploads = User::where('id','!=',1)->get();
        $berkas = UploadBerkasUsers::all();
        return view('dbadmin', compact('berkas'));
    }

    public function indexStatus($status)
    {
        $user = Auth::user();
        $id = $user->id;
        $berkasByStatus = UploadBerkasUsers::where('user_id', $id)
                            ->where('status', $status)
                            ->get();
        return view('berkasByStatus', compact('berkasByStatus'));
    }
    
    // public function verifikasi($id)
    // {
    //     $data = UploadBerkasUsers::findOrFail($id);
    //     $user = Auth::user();
            
    //         // $data->status_pengajuan = $req->status_pengajuan;
    //         $data->status_berkas = '1';
    //         $data->user_id = $user->id;
    //         $data->update();
    //         return view('dbuser');
           
    //     }
    }


