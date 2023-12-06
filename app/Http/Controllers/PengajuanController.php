<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    function pengajuan(){
        return view('pengajuan');
    }
}
