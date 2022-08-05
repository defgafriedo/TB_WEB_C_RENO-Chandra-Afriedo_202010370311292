<?php

use App\Http\Controllers\berand;
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


Route::get('/', [berand::class, 'beranda']);
Route::get('/form', [berand::class, 'form']);
Route::get('/kalkulator', [berand::class, 'kalkulator']);
Route::get('/profil', [berand::class, 'profil']);
Route::get('/table', [berand::class, 'tables']);
Route::get('/watch', [berand::class, 'watch']);