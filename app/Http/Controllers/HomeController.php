<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index() : View
    {
        return view('index');
    }

    public function all() : View
    {
        return view('all');
    }

    public function selesai() : View
    {
        return view('selesai');
    }

    public function tolak() : View
    {
        return view('tolak');
    }
}
