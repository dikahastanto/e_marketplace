<?php

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
Route::get('/e_marketplace/search' , 'pencarianController@tampil_pencarian')->name('cari');
Route::get('/', 'halaman_utamaController@kategori')->name('home');
Route::get('/e_marketplace/cart', 'cartController@index')->name('cart');
Route::get('/e_marketplace/{id}', 'tampil_produkController@detail_barang')->name('tapil_detail_barang');

Route::get('/e_marketplace/buy/{id}', 'buyController@user_buy_action')->name('buy');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/my_item/{auth}','my_itemController@tampil_item')->name('my_item')->middleware('auth');

Route::get('/form/insert_barang', 'item_kategoriController@tampil_item')->middleware('auth')->name('insert.barang');

Route::post('/insert_action/{auth}','my_itemController@insert_item')->name('insert')->middleware('auth');


Route::resource('barang', 'barangController');

Route::get('/e_marketplace/my_item/detail/{id}', 'tampil_produkController@detail_barang_user')->name('tapil_detail_barang_user')->middleware('auth');

Route::get('/e_marketplace/kategori/{kategori}' , 'kategoriController@tampil')->name('kategori');
