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

// Cara default dari laravel dalam mengakses view
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/about', function () {
//     $nama = 'ALFIN PRIANDI';
//     return view('about', ['nama' => $nama]);
// });

// Route::get('/mahasiswa', function () {
//     return view('mahasiswa');
// });

// Cara menjadikan route mengakses controller untuk mengakses view atau model
Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');

Route::get('/mahasiswa', 'MahasiswaController@index');

// Atau bisa memakai route bawaan laravel untuk semua resource di atas/standart resource
Route::resource('students', 'StudentsController');

/****************************************************************

// Cara ( Route::resource ) diatas sama saja dengan dibawah ini :

  Route::get('/students', 'StudentsController@index');

// Attention : method create harus diatas method show !!!
  Route::get('/students/create', 'StudentsController@create');
  Route::get('/students/{student}', 'StudentsController@show');

// Route untuk tambah data menggunakan method post
  Route::post('/students', 'StudentsController@store');

  Route::delete('/students/{student}', 'StudentsController@destroy');

  Route::get('/students/{student}/edit', 'StudentsController@edit');

  Route::put('/students/{student}', 'StudentsController@update');
// or Route::patch('/students/{student}', 'StudentsController@update');

 ****************************************************************/
