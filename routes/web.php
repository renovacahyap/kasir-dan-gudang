<?php

use App\Http\Controllers\GraphController;
use Carbon\Carbon;
use App\Models\Toko;
use App\Models\Pembelian;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TokoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\GudangController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\RegisterController;
use App\Models\Gudang;
use App\Models\Invoice;
use App\Models\Personal;
use App\Models\Position;
use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request as HttpRequest;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function (HttpRequest $request) {
    // dd(auth()->user()->name);
    $sekarang = Carbon::now()->format('H');
    // dd($sekarang);
    // $rapi = $sekarang->toRfc850String();
    // return $sekarang->format('H');
    $sapa = "";

    //Tima Greeting
    if ($sekarang >= 00 && $sekarang <= 12) {
        $sapa = "Morning";
    } elseif ($sekarang >= 12 && $sekarang <= 18) {
        $sapa = "Afternoon";
    } else if ($sekarang >= 18 && $sekarang <= 24) {
        $sapa = "Evening";
    }

    $user =  auth()->user();
    // $ts = Personal::with('position')->where('user_id', $user->id)->get();
    // dd($ts);

    $toko = $request->toko;
    $tahun = $request->th;


    // conditional when no parameter search

    if (request()->has('search')) {
        $query = Invoice::selectraw('YEAR(created_at) as earnYear,MONTHNAME(created_at) as earnMonth')->selectraw('SUM(total_harga) AS TotalSales')->groupBy('earnYear', 'earnMonth')->orderBy('earnYear')->orderBy('earnMonth')->toko(request('search'))->get();
        // echo 'ada';
    } else {
        $query = Invoice::selectraw('YEAR(created_at) as earnYear,MONTHNAME(created_at) as earnMonth')->selectraw('SUM(total_harga) AS TotalSales')->groupBy('earnYear', 'earnMonth')->orderBy('earnYear')->orderBy('earnMonth')->get();
    }


    // pendapatan per bulan
    $pbulan = Invoice::selectraw('SUM(total_harga) AS TotalSales')->whereMonth('created_at', date('n'))->whereYear('created_at',date('Y'))->first();

    // dd($pbulan);

    // pendapatan per tahun
    $ptahun = Invoice::selectraw('SUM(total_harga) AS TotalSales')->whereYear('created_at',date('Y'))->first();


    // Gudang

    // TOTAL BARANG BULAN INI
    $tbarang = Gudang::whereMonth('created_at', date('n'))->count();
    // dd($tbarang);
    // STOCK MENIPIS
    $stockm = Gudang::where('stock','<' ,50)->count();
    // dd($stockm);
    // BARANG MASUK HARI INI
    $barangin = Gudang::where('created_at', date('Y-n-d' ))->count() ;
    // dd($barangin);
    // BARANG TERLARIS
   









    // dd($query);

    if ($query == null) {
        $query =  0;
    } else {
        $query =  $query;
    }


    // check posisi
    $position = Personal::join('positions', 'personals.position_id', '=', 'positions.id')->select('personals.*', 'positions.nama_posisi')->where('personals.user_id', $user->id)->first();
  
    // dd($position);


    return view('dashboard.index.dashboard', [
        'sapa' => $sapa,
        'user' => $user->name,
        'coba' => $query,
        'tokos' => Toko::all(),
        'position' => $position,
        'pbulan' =>  $pbulan,
        'ptahun' => $ptahun,
        'tbarang' => $tbarang,
        'stockm' => $stockm,
        'barangin' => $barangin

    ]);
})->middleware('isAdmin');

Route::post('/gpendapatan', [GraphController::class, 'pendapatan']);


// admin

Route::resource('/user', UserController::class)->middleware('isAdmin');
Route::resource('/personal', PersonalController::class)->middleware('isAdmin');
Route::resource('/toko', TokoController::class)->middleware('isAdmin');
Route::resource('/position', PositionController::class)->middleware('isAdmin');



// gudang
Route::resource('/gudang', GudangController::class)->middleware('isAdmin');


// kasir
Route::resource('/pembelian', PembelianController::class)->middleware('isKasir');
Route::get('/stock', [PembelianController::class, 'stock']);
Route::get('/daftar', [PembelianController::class, 'daftar']);

//invoice
Route::resource('/inv', InvoiceController::class)->middleware('isKasir');
// Route::resource('/user',PersonalController::class);


//login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

//register
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);
