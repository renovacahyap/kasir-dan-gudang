<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Http\Requests\StoreInvoiceRequest;
use App\Http\Requests\UpdateInvoiceRequest;
use App\Models\Pembelian;
use GuzzleHttp\Promise\Create;
use GuzzleHttp\Psr7\Request;
use Hamcrest\Type\IsString;
use Illuminate\Http\Request as HttpRequest;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(HttpRequest $request)
    {

        $inv = $request->inv;
        // $total = Pembelian::where('invoice_id',$inv)->sum('total_harga');

        $total = Pembelian::join('gudangs', 'pembelians.gudang_id' , '=','gudangs.id')->where('invoice_id',$inv)->select(['*',Pembelian::raw('qty * total_harga as subtotal')])->get();
        $tbayar  = $total->sum('subtotal');

        //cetak struk
        return view('print',[
            'data' => Pembelian::join('gudangs', 'pembelians.gudang_id' , '=','gudangs.id')->where('invoice_id',$inv)->select(['*',Pembelian::raw('qty * total_harga as subtotal')])->get(),
            'total' => $tbayar,
        
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
    public function store(StoreInvoiceRequest $request)
    {
        $url = $request->id;
        
        // dd($url);
        // dd(gettype($url));
        // dd($request->total_bayar);
        $validateData = $request->validated();

        // dd($validateData);
        Invoice::create($validateData);
        return redirect('/pembelian')->with('tai', '/inv?inv='.$url);
    }

    /**
     * Display the specified resource.
     */
    public function show(Invoice $invoice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Invoice $invoice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInvoiceRequest $request, Invoice $invoice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Invoice $invoice)
    {
        //
    }
}
