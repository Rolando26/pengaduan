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



Route::get('/', function () {
    return view('index');
});

Route::post('aspirasi/cari','AspirasiController@index');
Route::get('aspirasi/feedback/{id}','AspirasiController@feedback')->name('aspirasi.feedback');
Route::post('aspirasi/ubahfeedback/{id}','AspirasiController@ubahfeedback');
Route::get('/finish','AspirasiController@finish');
Route::resource('aspirasi','AspirasiController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'AspirasiController@dashboard');

Route::resource('kategori','KategoriController')->middleware('auth');

Route::get('admin/aspirasi','AdminAspirasiController@index')->middleware('auth')->name('adminaspirasi.index');
Route::post('admin/aspirasi','AdminAspirasiController@index');
Route::get('admin/aspirasi/{id}/edit','AdminAspirasiController@edit')->middleware('auth')->name('aspirasiadmin.edit');
Route::put('admin/aspirasi/{id}/update','AdminAspirasiController@update')->middleware('auth')->name('aspirasiadmin.update');
Route::delete('admin/aspirasi/{id}/delete','AdminAspirasiController@destroy')->middleware('auth')->name('aspirasiadmin.destroy');
Route::get('/feedback/{id}','AdminAspirasiController@feedback')->middleware('auth')->name('feedback');
Route::get('history','AdminAspirasiController@history')->name('history.index');

Route::resource('users','UserController')->middleware('auth');

