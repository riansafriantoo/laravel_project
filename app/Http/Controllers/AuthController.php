<?php

namespace App\Http\Controllers;
use Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function postlogin(Request $request){
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/dashboard');
        }else{
            return redirect('/login');
        }
        // dd($request->all());
        // var_dump($request->all());

    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
