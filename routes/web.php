<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\MasyarakatController;

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

Auth::routes();



Route::middleware('auth:admin')->get('admin/home', [AdminController::class, 'index'])->name('petugas');
Route::middleware('auth:admin')->get('admin/show/{id}', [PengaduanController::class, 'show']);
Route::middleware('auth:admin')->put('admin/selesai/{id}', [PengaduanController::class, 'update'])->name('selesai');
Route::middleware('auth:masyarakat')->get('/home', [MasyarakatController::class, 'index'])->name('masyarakat');
Route::middleware('auth:masyarakat')->get('/buatlaporan', [PengaduanController::class, 'create'])->name('buatlaporan');
Route::middleware('auth:masyarakat')->post('/storelaporan', [PengaduanController::class, 'store'])->name('laporan.store');
