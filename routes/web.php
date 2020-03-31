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

Route::get('/Aryo', function(){
    return 'Haloo Aryo';
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/exportcct1', 'Api\export\ExportController@exportexcel');
Route::view('/{any}', 'home');