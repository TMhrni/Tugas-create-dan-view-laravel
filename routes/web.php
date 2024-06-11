<?php

use App\Http\Controllers\mahasiswaController;
use App\Http\Controllers\prodiController;
use App\Http\Controllers\produkController;
use App\Http\Controllers\SignInController;
use GuzzleHttp\Promise\Create;
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

//Route::get('produk', function () {
    //return view( 'create');
   
 //});

//Route::get('create_produk', function () {
  //  return view( 'create_produk');
   
 //});
//Route::get('mahasiswa',[mahasiswaController::class,'index']);
//Route::get('mahasiswa/create', [mahasiswaController::class,'create']);

Route::get('mahasiswa', [mahasiswaController::class, 'index']);
Route::get('mahasiswa/create', [mahasiswaController::class, 'create']);
Route::post('/mahasiswa', [mahasiswaController::class, 'store']);

Route::get('produk',[produkController::class,'index'] );
Route::get('produk/create',[produkController::class,'create'] );
Route::post('/mahasiswa',[mahasiswaController::class,'store'] );

Route::get('SignIn',[SignInController::class,'index'] );
Route::get('SignIn/create',[SignInController::class,'create'] );

Route::get('prodi',[prodiController::class,'index'] );
Route::get('prodi/create',[prodiController::class,'create'] );
Route::post('/prodi', [prodiController::class, 'store']);