<?php

namespace App\Http\Controllers;

use App\Models\Pembelian;
use Illuminate\Http\Request;
use App\Http\Requests\StorePembelianRequest;
use App\Http\Requests\UpdatePembelianRequest;
use App\Models\Gudang;
use App\Models\Invoice;
use App\Models\Personal;
use Carbon\Carbon;

class PembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $inv = "INV", sprintf('%07d', $prdid), $jmlpesan + 1  auth()->user()->id;
        $inv = Invoice::count();

        // dd(session('url'));

        $user = auth()->user()->id;

        // dd($inv+1);
        $invt = "INV". sprintf('%07d', $inv+1) . $user;



        // $total = Pembelian::where('invoice_id',$invt)->sum('total_harga');
        $total = Pembelian::join('gudangs', 'pembelians.gudang_id' , '=','gudangs.id')->where('invoice_id',$invt)->select(['*',Pembelian::raw('qty * total_harga as subtotal')])->get();
        $tbayar  = $total->sum('subtotal');
        // dd($total2->sum('subtotal'));
        if ($tbayar == 0) {
            $tbayar = null;
        }
        // dd((int)$total);
        // dd($invt);

        $toko = Personal::select('tokos.nama_toko','tokos.id as idtoko')->join('tokos', 'personals.toko_id', "=", "tokos.id")->where('personals.user_id', $user)->first();
        $today = $sekarang = Carbon::now()->isoFormat('D MMMM Y');
        

        // query data asli
        $datas = Pembelian::join('gudangs', 'pembelians.gudang_id' , '=','gudangs.id')->where('invoice_id',$invt)->get();
        // dd(Pembelian::join('gudangs', 'pembelians.gudang_id' , '=','gudangs.id')->where('invoice_id',$invt)->select(['*',Pembelian::raw('qty * total_harga as subtotal')])->get());
        return view('kasir.index',[
            'barang' => Gudang::all(),
            'data' => Pembelian::join('gudangs', 'pembelians.gudang_id' , '=','gudangs.id')->where('invoice_id',$invt)->select(['*',Pembelian::raw('qty * total_harga as subtotal')])->get(),
            'inv' => $invt,
            'total' => $tbayar,
            'user' => auth()->user()->name,
            'toko' => $toko,
            'today' => $today,
            'idinv' => $inv+1,
            'iduser' => $user
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

        $idgudang = $validateData['gudang_id']; //1
        $qty = $validateData['qty']; //10

        $getstockgudang = Gudang::find($idgudang);
        $stock = $getstockgudang->stock - $qty ;

        Gudang::where('id',$idgudang)->update(['stock' => $stock]);

        
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
        Pembelian::destroy($pembelian->id);
        return redirect('/pembelian');
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


    public function stock(Request $request) {
        $idbrg = $request->id;
        $value = Gudang::where('id',$idbrg)->get();

        return collect($value);
    }
}
