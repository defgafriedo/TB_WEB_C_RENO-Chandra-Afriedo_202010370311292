<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bookcontroller;
use App\Http\Controllers\BookProductController;
use App\Http\Controllers\jeniscontroller;
use App\Http\Controllers\identitycontroller;

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


Route::get('/', [BookProductController::class, 'index']);
Route::get('/book', [BookProductController::class, 'index']);
Route::get('/bookcreate', [BookProductController::class, 'create']);
Route::post('/bookcreateact', [BookProductController::class, 'store']);
Route::get('/bookedit/{id}', [BookProductController::class, 'edit']);
Route::patch('/bookeditact/{id}', [BookProductController::class, 'update']);
Route::get('/bookdelete/{id}', [BookProductController::class, 'delete']);
Route::get('/bookdetail/{id}', [BookProductController::class, 'show']);

Route::get('/jenis', [jeniscontroller::class, 'index']);
Route::get('/jeniscreate', [jeniscontroller::class, 'create']);
Route::post('/jeniscreateact', [jeniscontroller::class, 'store']);
Route::get('/jenisedit/{id}', [jeniscontroller::class, 'edit']);
Route::patch('/jeniseditact/{id}', [jeniscontroller::class, 'update']);
Route::get('/jenisdelete/{id}', [jeniscontroller::class, 'delete']);

Route::get('/identity', [identitycontroller::class, 'index']);
Route::get('/identitycreate', [identitycontroller::class, 'create']);
Route::post('/identitycreateact', [identitycontroller::class, 'store']);
Route::get('/identityedit/{id}', [identitycontroller::class, 'edit']);
Route::patch('/identityeditact/{id}', [identitycontroller::class, 'update']);
Route::get('/identitydelete/{id}', [identitycontroller::class, 'delete']);
