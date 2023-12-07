<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SyaratController extends Controller
{
    function syarat(){
        $user=Auth::user();
        return view('syarat',compact('user'));
    }
}
