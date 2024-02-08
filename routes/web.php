<?php

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
use App\Http\Controllers\BukuController;

Route::resource('buku',BukuController::class);

Route::put('/buku/{id}/pinjam', [BukuController::class, 'pinjam']);
Route::put('/buku/{id}/pengembalian', [BukuController::class, 'pengembalian']);