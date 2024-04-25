<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Models\User;

class LoginController extends Controller
{
    public function login()
    {
        $data = User::get();

        return view('login',compact('data'));
    }

    // public function login_proses(Request $request)
    // {
    //     $request->validate([
    //        'email'     => 'required',
    //         'password' => 'required'
    //     ]);

    //     $data = [
    //         'email'    => $request->email,
    //         'password' => $request->password
    //     ];

    //     if(Auth::attempt($data)) {
    //         return redirect()->route('index');
    //     } else {
    //         return redirect()->route('login')->with('failed', 'Email atau password salah');
    //     }
    // }
}
