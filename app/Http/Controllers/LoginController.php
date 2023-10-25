<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session; // Make sure to import Session

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
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::attempt($data)) {
            $user_role=Auth::user()->role;
                if($user_role=="admin"){
                    return view('/dbadmin');
                }
                else if($user_role=="user"){
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
