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

Route::get('/home', 'HomeController@index')->name('home');

//route view
Route::get('/barang' , 'PageController@barang');
Route::get('/pemilik' , 'PageController@pemilik');
Route::get('/transaksi' , 'PageController@transaksi');

//route view input
Route::get('/a_InputTransaksi' , 'PageController@InputTransaksi');

//upload
Route::post('/a_InputBarang/upload' , 'BarangController@upload');
Route::post('/a_InputPemilik/upload' , 'PemilikController@upload');
Route::post('/a_InputTransaksi/upload' , 'TransaksiController@upload');

//edit
Route::get('pemilik/b_EditPemilik/{id}' , 'PemilikController@edit');
Route::post('/pemilik/update','PemilikController@update');

Route::get('barang/b_EditBarang/{id}' , 'BarangController@edit');
Route::post('/barang/update','BarangController@update');

//delete
Route::get('barang/hapus/{id}' , 'BarangController@delete');
Route::get('pemilik/hapus/{id}' , 'PemilikController@delete');
Route::get('transaksi/hapus/{id}' , 'TransaksiController@delete');