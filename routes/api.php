<?php
use App\cct1;
use App\cct2;
use App\cct3;
use App\cct4;
use App\skalasikap;
use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/Aryo', function(){
//     return 'Haloo Aryo';
// });

//soal
Route::resource('soal', 'Api\Soal\SoalController')->except([
    'create', 'edit'
]);
//CCT1
Route::post('cct1/post', function(){
    return cct1::create(request()->all());
});
//CCT2
Route::post('cct2/post', function(){
    return cct2::create(request()->all());
});
//CCT3
Route::post('cct3/post', function(){
    return cct3::create(request()->all());
});
//CCT4
Route::post('cct4/post', function(){
    return cct4::create(request()->all());
});
//SkalaSikap
Route::post('skala/post', function(){
    return skalasikap::create(request()->all());
});

//CCT1
Route::resource('cct1', 'Api\cct2\Ctt1Controller')->except(['create', 'edit']);
//CCT2
Route::resource('cct2', 'Api\cct2\Ctt1Controller')->except(['create', 'edit']);
//CCT3
Route::resource('cct3', 'Api\cct3\Ctt1Controller')->except(['create', 'edit']);
//CCT4
Route::resource('cct4', 'Api\cct4\Ctt1Controller')->except(['create', 'edit']);
//SkalaSikap
Route::resource('skala', 'Api\cct4\Ctt1Controller')->except(['create', 'edit']);
//USER 
Route::resource('user', 'Api\User\UserController')->except([
    'create', 'edit'
]);

// //user login
Route::post('user/login', 'Api\User\UserController@login');
//Export
Route::get('exportcct1', 'Api\export\ExportController@exportexcel');
Route::get('exportcct2', 'Api\export\Exportcct2@exportcc2');
Route::get('exportcct3', 'Api\export\Exportcct3@exportcc3');
Route::get('exportcct4', 'Api\export\Exportcct4@exportcc4');
Route::get('exportskala', 'Api\export\ExportSkala@exportskala');


// //pengaturan
// Route::get('peraturan', 'Api\Peraturan\PeraturanController@index');
// Route::put('peraturan', 'Api\Peraturan\PeraturanController@update');

// //Nilai or Hasil
// Route::get('nilai', 'Api\Nilai\NilaiController@index');
// Route::get('nilai/{android_id}', 'Api\Nilai\NilaiController@show');
// Route::delete('nilai/{nilai}', 'Api\Nilai\NilaiController@destroy');

// Route::get('dashboard', 'Api\Nilai\NilaiController@dashboard');

// Route::get('testing', 'Api\Peraturan\PeraturanController@testing');