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

Route::group(['prefix'=>'/admin', 'middleware' => ['auth']], function() {
    // Route::get('/jabatans','JabatanController@index')->name('jabatans.index');
    // Route::get('/jabatans/create','JabatanController@create')->name('jabatans.create');
    // Route::post('/jabatans','JabatanController@store')->name('jabatans.store');
    // Route::get('/jabatans/{jabatan}','JabatanController@show')->name('jabatans.show');
    // Route::get('/jabatans/{jabatan}/edit','JabatanController@edit')->name('jabatans.edit');
    // Route::patch('/jabatans/{jabatan}','JabatanController@update')->name('jabatans.update');
    // Route::delete('/jabatans/{jabatan}','JabatanController@destroy')->name('jabatans.destroy');
    Route::resource('jabatans', 'JabatanController');
    Route::resource('karyawans', 'KaryawanController');
    Route::resource('pendidikans', 'PendidikanController');
    Route::resource('statuses', 'StatusController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
