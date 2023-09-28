<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class GraphController extends Controller
{
    public function pendapatan(Request $request) {
        $toko = $request->toko;
        $tahun = $request->th;

        $query = Invoice::selectraw('YEAR(created_at) as earnYear,MONTHNAME(created_at) as earnMonth')->selectraw('SUM(total_harga) AS TotalSales')->where('toko_id', $toko)->where('seller_id',auth()->user()->id)->groupBy('earnYear','earnMonth')->orderBy('earnYear')->orderBy('earnMonth')->get();
        
        



    }
}
