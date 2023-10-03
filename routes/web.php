<?php

use App\Http\Controllers\balasanControler;
use App\Http\Controllers\diskusiControler;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/', [diskusiControler::class, 'index'])->name('/');
Route::post('/', [diskusiControler::class, 'store'])->name('diskusi.tambah');
Route::get('/detail/{id}', [diskusiControler::class, 'show'])->name('diskusi.detail');
Route::post('/detail/balasan', [balasanControler::class, 'store'])->name('balasan.tambah');
