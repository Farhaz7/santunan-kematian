<?php

namespace App\Http\Controllers;

use App\Models\UploadBerkasUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $user=Auth::user();
        $id=$user->id;
        $berkas=UploadBerkasUsers::find($id);
        return view('home',compact('user','berkas'));
    }
}
