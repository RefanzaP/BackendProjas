<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\orderController;
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

Route::get('/order',[orderController::class, 'ambil']);
//tambah data
Route::get('/order/tambah',[orderController::class, 'tambah']);
//simpan penambahan data
Route::post('/order/store',[orderController::class, 'store']);
//&&&
Route::get('/order/hapus/{id_order}',[orderController::class, 'hapus']);
//update
Route::get('/order/edit/{id_order}',[orderController::class, 'edit']);
Route::post('/order/update',[orderController::class, 'update']);