<?php

namespace App\Http\Controllers;

use App\Models\Position;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.user.index',[
            'data' => User::all()
           
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.user.create',[
            'pt' => Position::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
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
        return redirect('/user')->with(['success'=> 'User Berhasil Ditambahkan',
        'warna' => 'success']);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('dashboard.user.edit',[
            'user'=>$user
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'username' => 'required',
            'password' => 'required',
            'status' => ''
         ]);

        $validateData['password'] = Hash::make($validateData['password']);

        User::where('id',$user->id)->update($validateData);
        
        return redirect('/user')->with(['success'=> 'User Berhasil Diedit',
        'warna' => 'warning']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
