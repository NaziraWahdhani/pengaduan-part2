<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class LoginuserController extends Controller
{
    public function home() : View
    {
        return view('home');
    }

    public function loginuser() : View
    {
        return view('loginuser');
    }

    public function login_user(Request $request)
    {
        $data = [
            'nik' => $request->input('nik'),
            'password' => $request->input('password'),
        ];

        if (Auth::Attempt($data)) {
            return redirect('page1');
        }else{
            Session::flash('error', 'Nik atau Password Salah');
            return redirect('/loginuser');
        }
    }

    public function page1() : View
    {
        return view('page1');
    }
}
