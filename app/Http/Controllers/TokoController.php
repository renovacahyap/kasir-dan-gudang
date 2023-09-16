<?php

namespace App\Http\Controllers;

use App\Models\Toko;
use App\Http\Requests\StoreTokoRequest;
use App\Http\Requests\UpdateTokoRequest;

class TokoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.toko.index',[
            'data'=>Toko::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.toko.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTokoRequest $request)
    {
        $validateData = $request->validated();
        Toko::create($validateData);
        return redirect('/toko')->with('success','Toko Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Toko $toko)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Toko $toko)
    {
        return view('dashboard.toko.edit',[
            'toko'=>$toko
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTokoRequest $request, Toko $toko)
    {
       $validateData=$request->validated();
       Toko::where('id',$toko->id)->update($validateData);
       return redirect('/toko');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Toko $toko)
    {
        //
    }
}
