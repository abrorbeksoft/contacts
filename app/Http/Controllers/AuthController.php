<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthController extends Controller
{

    public function __construct()
    {
//        $this->middleware('guest')->only(['login','register']);
//        $this->middleware('auth')->only('logout');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username'=>'bail|required|string|required|min:6|max:200',
            'password'=>'bail|required|string',
        ]);
        $arry=$request->only('username','password');
        if (Auth::attempt($arry,$request->remember))
        {
            $user=User::where('username',$request->username)->first();
            return view('contacts',[
                'user'=>$user
            ]);
        }
        return redirect()->back();
    }

    public function register(Request $request)
    {
        $validated=$request->validate([
            'fullname'=>'bail|required|string|min:6|max:200',
            'username'=>'bail|required|string|required|min:6|max:200',
            'email'=>'bail|required|email:rfc,dns',
            'password'=>'bail|required|string',
        ]);

        $user=new User();
        $user->username=$validated['username'];
        $user->fullname=$validated['fullname'];
        $user->email=$validated['email'];
        $user->password=Hash::make($validated['password']);
        $user->api_token=Str::random(60);
        $user->save();
        Auth::login($user);

        return view('contacts',[
            'user'=>$user
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return view('login');
    }

}
