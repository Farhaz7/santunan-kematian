<?php

namespace App\Http\Controllers;
use App\Models\UploadBerkasUsers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function dbuser(){
        $user=Auth::user();
        $id=$user->id;
        $berkas=UploadBerkasUsers::find($id);
        return view('dbuser',compact('user','berkas'));
    }
}
