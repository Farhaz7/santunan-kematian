<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataPengajuanController extends Controller
{
    public function dbpengajuan()
    {
        return view('dbpengajuan');
    }
}
