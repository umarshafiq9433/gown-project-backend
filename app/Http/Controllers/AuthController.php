<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('Auth.login');
    }

    public function check(Request $request)
    {
        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            return redirect('/admin')->with('success','Successfully Logged in.');
        }
        return redirect()->back()->with('error','Invalid Username/Password');
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
