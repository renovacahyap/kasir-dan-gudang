<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function authenticate(Request $request)
    {
        // dd($request);
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        // dd($credentials);
        // dd(Auth::attempt($credentials));

        if (Auth::attempt($credentials, $request->remember)) {
           $request->session()->regenerate();

           if (auth()->user()->status == 1 or auth()->user()->status == 2) {
            return redirect()->intended('/');
           }
           return redirect()->intended('/pembelian');

        }
        return back()->with('LoginError', 'Login Failed!');
    }


    public function logout()
    {
        Auth::logout();

        // $this->guard()->logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/login');
    }
}
