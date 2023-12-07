<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DataPengajuanController extends Controller
{
    public function dbpengajuan()
    {
        $usersWithUploads = User::with('uploadBerkas')->get();
                return view('dbpengajuan', compact('usersWithUploads'));
    }
}
