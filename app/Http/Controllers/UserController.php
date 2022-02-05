<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function index(){
        $user = DB::table('users')
        ->get();

        return view('dashboard.userlist',['user' => $user]);
    }

    public function profile($id){
        $user = \App\User::find($id);
        return view('dashboard/profile',['user'=>$user]);

    }

    public function uploadAvatar(Request $request,$id){
        // dd($request->all());
        $user = \App\User::find($id);
        $user->update($request->all());
        if($request->hasFile('avatar')){
            $request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
            $user->avatar=$request->file('avatar')->getClientOriginalName();
            $user->save();
        }
        return view('dashboard/profile',['user'=>$user]);

    }
}
