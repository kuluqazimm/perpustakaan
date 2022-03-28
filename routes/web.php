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


Route::get('/', function() {
    return redirect(route('login'));
});
Route::get('/starter', function() {
    return view('starter');
});

Auth::routes(['verify' => false, 'reset' => false]);

Route::middleware('auth')->group(function() {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('/dataBuku','DataBukuController@index')->name('daftarBuku');
    Route::get('/dataBuku/create', 'DataBukuController@create')->name('createBuku');
    Route::post('/dataBuku/create', 'DataBukuController@store')->name('storeBuku');
    Route::get('/dataBuku/{dataBuku}/edit', 'DataBukuController@edit')->name('editBuku');
    Route::post('/dataBuku/{dataBuku}/edit', 'DataBukuController@update')->name('updateBuku');
    Route::get('/dataBuku/{dataBuku}/delete', 'DataBukuController@destroy')->name('deleteBuku');
    Route::get('/anggota','AnggotaController@index')->name('daftarAnggota');
    Route::get('/anggota/create', 'AnggotaController@create')->name('createAnggota');
    Route::post('/anggota/create', 'AnggotaController@store')->name('storeAnggota');
    Route::get('/anggota/{anggota}/edit', 'AnggotaController@edit')->name('editAnggota');
    Route::post('/anggota/{anggota}/edit', 'AnggotaController@update')->name('updateAnggota');
    Route::get('/anggota/{anggota}/delete', 'AnggotaController@destroy')->name('deleteAnggota');
});
