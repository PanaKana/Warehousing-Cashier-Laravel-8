<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\SuperAdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('blank');
});

Route::get('/owner/home', function () {
    return view('superadmin.home');
});

Route::get('/stock', [StokController::class, 'home']);

Route::get('/stock/all', [StokController::class, 'allstok']);

Route::get('/stock/mutasi', [StokController::class, 'allmutasi']);

Route::get('/stock/mutasi/in', [StokController::class, 'mutasimasuk']);

Route::get('/stock/mutasi/out', [StokController::class, 'mutasikeluar']);


Route::get('/owner/stock', [SuperAdminController::class, 'cekstok']);


