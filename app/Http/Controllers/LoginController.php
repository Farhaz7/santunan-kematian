<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session; // Make sure to import Session
use Yoeunes\Toastr\Facades\Toastr;

class LoginController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect('home');
        } else {
            return view('login');
        }
    }

    public function actionlogin(Request $request)
    {
        $data = [
            'nik_meninggal' => $request->input('nik'),
            'password' => $request->input('password'),
        ];

        if (Auth::attempt($data)) {
            $user_role=Auth::user()->role;
                if($user_role=='1'){
                    toastr()->success("Berhasil Login");
                    return view('/dbadmin');
                }
                else if($user_role=='2'){
                    toastr()->success("Berhasil Login");
                    return redirect('home');
                }
        } else {
            Session::flash('error', 'Email atau password salah');
            return redirect('/');
        }
    }

    public function actionlogout()
    {
        Auth::logout();
        return redirect('/');
    }
    public function index()
    {
        return view('/dbadmin');
    }
}
