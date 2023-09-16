<?php

namespace App\Http\Controllers;

use App\Models\Pembelian;
use Illuminate\Http\Request;
use App\Http\Requests\StorePembelianRequest;
use App\Http\Requests\UpdatePembelianRequest;
use App\Models\Gudang;
use App\Models\Invoice;

class PembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $inv = "INV", sprintf('%07d', $prdid), $jmlpesan + 1  auth()->user()->id;
        $inv = Invoice::count();

        // dd($inv+1);
        $invt = "INV". sprintf('%07d', $inv+1);


        $total = Pembelian::where('invoice_id',1)->sum('total_harga');
        // dd((int)$total);
        // dd($invt);
        return view('kasir.index',[
            'barang' => Gudang::all(),
            'data' => Pembelian::where('invoice_id',1)->get(),
            'inv' => $invt,
            'total' => $total
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePembelianRequest $request)
    {
        $validateData = $request->validated();
        Pembelian::create($validateData);
        return redirect('/pembelian');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pembelian $pembelian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pembelian $pembelian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePembelianRequest $request, Pembelian $pembelian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pembelian $pembelian)
    {
        //
    }


    public function daftar(Request $request) {
        $id = $request->query('id');
        $pecah = explode(',',$id);
        $result = Gudang::whereIn('kode_barang',$pecah)->get()->toJson();

        // dd($result);
        // $json = json_encode($result);
        // dd($result->toJson(JSON_PRETTY_PRINT));

        // $hasil = collect($json)[0];

        // dd(collect($json));
        return $result;
        // return $id;

        // Gudang::whereIn('id',);
    }
}
