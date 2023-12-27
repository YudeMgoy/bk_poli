<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin/obat',[App\Http\Controllers\ObatController::class, 'index'])->name('obat');
Route::get('/admin/obat/add',function(){return view("tambahobat");})->name('tambahobat');
Route::post('/admin/obat/store',[App\Http\Controllers\ObatController::class, 'store'])->name('storeobat');
Route::get('/admin/obat/edit/{id}',[App\Http\Controllers\ObatController::class, 'edit'])->name('editobat');
Route::post('/admin/obat/update',[App\Http\Controllers\ObatController::class, 'update'])->name('updateobat');
Route::get('/admin/obat/delete/{id}',[App\Http\Controllers\ObatController::class, 'delete'])->name('hapusobat');

Route::get('/dokter/periksa', function(){
    return view('periksa');
})->name('periksa');;

Route::get('/dokter/riwayatpasien', function(){
    return view('riwayat_pasien');
})->name('riwayat_pasien');
