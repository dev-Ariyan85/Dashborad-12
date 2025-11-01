<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        return view('auth.login');
    }


    public function register(Request $request)
    {
        return view('auth.register');
    }


    public function registerStore(Request $request)
    {
       $request->validate([
           'username' => 'required|string|max:255|unique:users,username',
           'password' => 'required|string|min:8|confirmed'
       ]);


       User::create([
        'name'=> $request->name,
        'username'=> $request->username,
        'password'=> bcrypt($request->password),
        'email'=> $request->email,
       ]);


       return redirect('login')->with('success','Registration successful');





       
    }
}
