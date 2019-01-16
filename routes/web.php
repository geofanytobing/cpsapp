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
    return view('welcome');
});
Route::get('/form', function () {
    return view('form.index');
});


Route::get('/pemasukan', function () {
    return view('form.pemasukan.index');
});
Route::get('/pemasukan/add', function () {
    return view('form.pemasukan.add');
});
Route::get('/pemasukan/edit', function () {
    return view('form.pemasukan.edit');
});


Route::get('/pengeluaran/add', function () {
    return view('form.pengeluaran.add');
});
Route::get('/pengeluaran/edit', function () {
    return view('form.pengeluaran.edit');
});
Route::get('/pengeluaran', function () {
    return view('form.pengeluaran.index');
});


Route::get('/cekabsensi', function () {
    return view('form.cekabsensi.index');
});
Route::get('/cekabsensi/add', function () {
    return view('form.cekabsensi.add');
});


Route::get('/uploadfile/add', function () {
    return view('form.uploadfile.add');
});
Route::get('/uploadfile/edit', function () {
    return view('form.uploadfile.edit');
});
Route::get('/uploadfile', function () {
    return view('form.uploadfile.index');
});

Route::post('/webcam/save', 'WebcamController@save');
Route::get('/webcam/', 'WebcamController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
