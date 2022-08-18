<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pesan1Controller;
use App\Http\Controllers\Pesan2Controller;
use App\Http\Controllers\Pesan3Controller;
use App\Http\Controllers\Pesan4Controller;
use App\Http\Controllers\Pesanan1Controller;
use App\Http\Controllers\CariController;
use App\Http\Controllers\HomeController;


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
    return view('welcome');
});

Route::get('kost', function () {
    return view('kost');
});


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/pesan1', [Pesan1Controller::class, 'index'])->name('pesan1');
Route::get('/pesan2', [Pesan2Controller::class, 'index'])->name('pesan2');
Route::get('/pesan3', [Pesan3Controller::class, 'index'])->name('pesan3');
Route::get('/pesan4', [Pesan4Controller::class, 'index'])->name('pesan4');
Route::get('/pesanan1', [Pesanan1Controller::class, 'index'])->name('pesanan1');
Route::get('/cari', [CariController::class, 'index'])->name('cari');
