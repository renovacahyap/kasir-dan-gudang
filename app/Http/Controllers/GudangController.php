<?php

namespace App\Http\Controllers;

use App\Models\Gudang;
use App\Http\Requests\StoreGudangRequest;
use App\Http\Requests\UpdateGudangRequest;

class GudangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.gudang.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.gudang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGudangRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Gudang $gudang)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gudang $gudang)
    {
        return view('dashboard.gudang.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGudangRequest $request, Gudang $gudang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gudang $gudang)
    {
        //
    }
}
