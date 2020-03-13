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

// use Illuminate\Routing\Route;
// use Illuminate\Support\Facades\Route;


Route::get('/', function () {
	return view('welcome');
});

Route::get('halo', function () {
	return "halo, guysssssssssssss";
});


Route::get('blog', function () {
	return view('blog');
});

// rute untuk dosen dimana memanggil controlr dosen dan fungsi index yang ada di dalamnya
Route::get('dosen', 'DosenController@index');

Route::get('/pegawai/{nama}', 'PegawaiController@index');

Route::get('/pegawai', 'PegawaiController@index');

Route::get('/pegawai/edit/{id}','PegawaiController@edit');

Route::get('/store', 'PegawaiController@store');

Route::get('/formulir', 'PegawaiController@formulir');

Route::post('/formulir/proses', 'PegawaiController@proses');

Route::get('/blog', 'BlogController@home');
Route::get('/blog/tentang', 'BlogController@tentang');
Route::get('/blog/kontak', 'BlogController@kontak');

Route::get('/tambah', 'PegawaiController@mamak');

Route::post('/pegawai/update','PegawaiController@update');



//PAGES and FORMS
Route::get('/', 'ProcessController@indexlogin');

//show view homepage form
Route::get('/home', 'ProcessController@homepage');

//PROCESS CONTROLLER
//insert data
Route::post('/home', 'ProcessController@store');

//delete data
Route::post('/view', 'ProcessController@destroy');

//List all data 
Route::get('/view', 'ProcessController@index');

//search data
Route::get('/search', 'ProcessController@show');

// edit and update data
Route::get('/edit/{id}', 'ProcessController@edit');

Route::post('/update', 'ProcessController@update');

// Auth routes, login, register, forgot pass
Auth::routes();
