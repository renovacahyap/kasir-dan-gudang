<?php

namespace App\Http\Controllers;

use App\Models\Gudang;
use App\Http\Requests\StoreGudangRequest;
use App\Http\Requests\UpdateGudangRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class GudangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $test = Gudang::with('')->toSql();
        // dd($test);
        return view('dashboard.gudang.index',[
            'data' => Gudang::with('personal.user')->get()
        ]);
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
        // dd($request);
        $validateData = $request->validated();
        $validateData['personal_id'] = 1;
        // $validateData['personal_id'] = Auth::id();
        Gudang::create($validateData);
        return redirect('/gudang');
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
        return view('dashboard.gudang.edit',[
            'data'=>$gudang
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGudangRequest $request, Gudang $gudang)
    {
          // dd($request);
          $validateData = $request->validated();
          // $validateData['personal_id'] = 1;
          // $validateData['personal_id'] = Auth::id();
          Gudang::where('id',$gudang->id)->update($validateData);
          return redirect('/gudang');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gudang $gudang)
    {
        Gudang::destroy($gudang->id);
        return redirect('/gudang');
    }
}
