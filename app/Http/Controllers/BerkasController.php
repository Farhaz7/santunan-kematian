<?php

namespace App\Http\Controllers;

use App\Models\UploadBerkasUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class BerkasController extends Controller
{
    public function berkasuser()
    {
        $user = Auth::user();
        $data = UploadBerkasUsers::where('user_id', '=', Auth::user()->id)->get();
        $data = $data[0];
        return view ("berkasuser",compact('data','user'));
    }
}
