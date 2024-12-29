<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginPost(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,

        ];
        if (Auth::attempt($credentials)) {
            return redirect('/index') ->with('success', 'Login Success');
        }
        return back()->with('error', 'Invalid Email Or Password');
    }
    public function logout(){
        Auth::logout();
        return redirect() -> route('login');
    }
}
