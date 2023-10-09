<?php

namespace App\Http\Controllers;

use App\Models\Personal;
use App\Http\Requests\StorePersonalRequest;
use App\Http\Requests\UpdatePersonalRequest;
use App\Models\Position;
use App\Models\Toko;
use App\Models\User;

class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('dashboard.personal.index',[
        'data'=>Personal::all()
       ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.personal.create',[
            'user'=>User::all(),
            'toko'=>Toko::all(),
            'posisi'=>Position::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePersonalRequest $request)
    {
        $validateData = $request->validated();
        Personal::create($validateData);
        return redirect('/personal')->with(['success'=> 'Posisi Berhasil Ditambahkan',
        'warna' => 'success']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Personal $personal)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Personal $personal)
    {
        return view("dashboard.personal.edit",[
            'data'=>$personal,
            'user'=>User::all(),
            'toko'=>Toko::all(),
            'posisi'=>Position::all()

        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePersonalRequest $request, Personal $personal)
    {
        $validateData = $request->validated();
        Personal::where('id',$personal->id)->update($validateData);
        return redirect('/personal')->with(['success'=> 'Posisi Berhasil Diedit',
        'warna' => 'warning']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Personal $personal)
    {
        Personal::destroy($personal->id);
        return redirect('/personal')->with(['success'=> 'Posisi Berhasil Dihapus',
        'warna' => 'danger']);
    }
}
