<?php

namespace App\Http\Controllers;
use Auth;
use Hash;
use \App\User;

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

    }

    public function register(){
        return view('/auth/register');
    }

    public function createUser(Request $request){

        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'email' => 'required',
        //     'password' => 'required|string|confirmed',
        //     'role' => 'required',
        // ]);
        
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'password' => Hash::make($request->password),
        ]);

        // dd($request->all());
        return redirect('/login');
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
