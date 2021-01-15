<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['contacts']);
    }

    public function index()
    {
        return view('home');
    }

    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function doRegister()
    {

    }

    public function doLogin()
    {

    }

    public function contacts()
    {

        return view('contacts',[
            'user'=>Auth::user()
        ]);
    }
}
