<?php

namespace App\Http\Controllers;

use App\Models\UploadBerkasUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BerkasController extends Controller
{
    public function berkasuser($id)
    {
        $data = UploadBerkasUsers::where('user_id',$id);
        return view ("berkasuser",compact('data'));
    }
}
