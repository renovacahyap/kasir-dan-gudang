<?php

namespace App\Http\Controllers;

use App\Models\Position;
use App\Http\Requests\StorePositionRequest;
use App\Http\Requests\UpdatePositionRequest;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.posisi.index',[
            'data'=>Position::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('dashboard.posisi.create',[
            'saya' =>  auth()->user()->id
       ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePositionRequest $request)
    {
        $validateData = $request->validated();
        Position::create($validateData);
        return redirect('/position')->with(['success'=> 'Posisi Berhasil Ditambahkan',
        'warna' => 'success']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Position $position)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Position $position)
    {
        return view('dashboard.posisi.edit',[
            'data'=>$position
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePositionRequest $request, Position $position)
    {
        $validateData = $request->validated();
        Position::where('id',$position->id)->update($validateData);
        return redirect('/position')->with(['success'=> 'Posisi Berhasil Diedit',
        'warna' => 'warning']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Position $position)
    {
        //
    }
}
