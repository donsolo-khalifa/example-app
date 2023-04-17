<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function register()
    {
        return view('users.register');
    }

    public function store(Request $request)
    {
        $info = $request->validate([
            'name'=>['required'],
            'email'=>['required', 'unique:users,email'],
            'password'=>['required','confirmed'],

        ]);

        $info['password']=bcrypt($info['password']);

        $user = User::create($info);
        auth()->login($user);
        return redirect('/')->with('success','User created successfully');
        
    }
}
