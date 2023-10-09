<?php

namespace App\Http\Controllers;

use App\Models\Gudang;
use App\Http\Requests\StoreGudangRequest;
use App\Http\Requests\UpdateGudangRequest;
use App\Models\Personal;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class GudangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $test = Gudang::with('personal.user')->join('personals', 'personals.id' ,'=' ,"gudangs.personal_id" )->select('gudangs.*','personals.user_id as user_id')->where('user_id', auth()->user()->id )->get();
        // dd($test);
        return view('dashboard.gudang.index',[
            'data' => $test
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    
        return view('dashboard.gudang.create',[
            'aku' => Personal::where('user_id',auth()->user()->id)->first(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGudangRequest $request)
    {
        // dd($request);
        $validateData = $request->validated();
        // $validateData['personal_id'] = 1;
        // $validateData['personal_id'] = Auth::id();
        Gudang::create($validateData);
        return redirect('/gudang')->with(['success'=> 'Barang Berhasil Ditambahkan',
        'warna' => 'success']);
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
          return redirect('/gudang')->with(['success'=> 'Barang Berhasil Diedit',
          'warna' => 'warning']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gudang $gudang)
    {

        // dd($gudang);
        Gudang::destroy($gudang->id);
        return redirect('/gudang')->with(['success'=> 'Barang Berhasil Dihapus',
        'warna' => 'danger']);
    }
}
