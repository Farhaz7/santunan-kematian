<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function actionregister(Request $request)
    {
        // $validator = Validator::make($request->all(), [
        //     'nik_meninggal' => 'required',
        //     'nama_meninggal' => 'required',
        //     'password' => 'required|min:6',
        // ]);

        // if ($validator->fails()) {
        //     // Redirect back with validation errors
        //     return redirect()->back()
        //         ->withErrors($validator)
        //         ->withInput();
        // }

        // Create a new user
        $user = User::create([
            'nik_meninggal' => $request->nik,
            'nama_meninggal' => $request->name,
            'password' => Hash::make($request->password),
        ]);


        Session::flash('message', 'Register Berhasil. Akun Anda sudah Aktif silahkan Login menggunakan Email dan password.');

        return redirect('/');
    }
}
