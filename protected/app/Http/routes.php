<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'DashController@dashboard');
Route::get('/dashboard', 'DashController@dashboard');
Route::get('/profil', 'ProfilController@index');
Route::get('/materi', 'MateriController@show');
Route::get('/materi/{id}', 'MateriController@single');

Route::get('/berita', 'DashController@berita');
Route::get('/child', 'DashController@child');
Route::get('/profile', 'DashController@profile');

Route::group(['middleware' => ['web']], function () {
  Route::resource('blog', 'BlogController');
});

Route::group(['middleware' => ['web']], function () {
  Route::resource('wisatawan', 'WisatawanController');
});





Route::get('/home', 'HomeController@index');
