<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Models\User;

class LoginController extends Controller
{
    public function login() : View
    {
        return \view('login');
    }

    public function login_proses(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($request)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return redirect()->route('login')->with('success', 'Berhasil');
    }

}
