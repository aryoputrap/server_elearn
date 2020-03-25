<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/Aryo', function(){
    return 'Haloo Aryo';
});

//soal
Route::resource('soal', 'Api\Soal\SoalController')->except([
    'create', 'edit'
]);
//CC1
Route::resource('cc1', 'Api\cc1\cc1controller')->except(['create', 'edit']);
//CCT1
Route::resource('cct1', 'Api\cct1\Ctt1Controller')->except(['create', 'edit']);
//CCT2
Route::resource('cct2', 'Api\cct2\Ctt1Controller')->except(['create', 'edit']);
//CCT3
Route::resource('cct3', 'Api\cct3\Ctt1Controller')->except(['create', 'edit']);
//CCT4
Route::resource('cct4', 'Api\cct4\Ctt1Controller')->except(['create', 'edit']);
// //user
// Route::resource('user', 'Api\User\UserController')->except([
//     'create', 'edit'
// ]);

// //user login
// Route::post('user/login', 'Api\User\UserController@login');


// //pengaturan
// Route::get('peraturan', 'Api\Peraturan\PeraturanController@index');
// Route::put('peraturan', 'Api\Peraturan\PeraturanController@update');

// //Nilai or Hasil
// Route::get('nilai', 'Api\Nilai\NilaiController@index');
// Route::get('nilai/{android_id}', 'Api\Nilai\NilaiController@show');
// Route::delete('nilai/{nilai}', 'Api\Nilai\NilaiController@destroy');

// Route::get('dashboard', 'Api\Nilai\NilaiController@dashboard');

// Route::get('testing', 'Api\Peraturan\PeraturanController@testing');