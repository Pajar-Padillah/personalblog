<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('/login/index', [
            'title' => 'Login'
        ]);
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        if (Auth::attempt($credentials)) {
            $request->Session()->regenerate();
            toastr()->success('Login Success')->info(auth()->user()->name, 'Welcome back');
            return redirect()->intended('/dashboard');
        }
        // return back()->with('loginError', 'Login failed!');  
        toastr()->warning('Username or Password is not valid, Please try again!')->error('Login Failed!');
        return back();
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        toastr()->success('Logout success!');
        return redirect('/login');
    }
}
