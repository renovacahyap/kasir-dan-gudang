<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index() {
        return view('register');
    }

    public function store(Request $request)
    {
        $request->status;
        $validateData = $request->validate([
           'name' => 'required',
           'username' => 'required',
           'password' => 'required',
           'status' => ''
        ]);

        User::create($validateData);
        return redirect('/login')->with('success', 'Registration successfull!');
    }
}
