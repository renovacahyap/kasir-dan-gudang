<?php

use App\Http\Controllers\GudangController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\TokoController;
use App\Http\Controllers\UserController;
use App\Models\Pembelian;
use App\Models\Toko;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('dashboard.index.index');
});


// admin
Route::resource('/user',UserController::class);
Route::resource('/personal',PersonalController::class);
Route::resource('/toko',TokoController::class);
Route::resource('/position',PositionController::class);



// gudang
Route::resource('/gudang',GudangController::class);


// kasir
Route::resource('/pembelian',PembelianController::class);
Route::get('/daftar',[PembelianController::class,'daftar']);

//invoice
Route::resource('/inv',InvoiceController::class);
// Route::resource('/user',PersonalController::class);