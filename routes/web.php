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

Route::group(['prefix'=>'belajar'], function(){
	Route::get('/', 'Belajar\JawabController@index');
});
Route::group(['prefix'=>'admin'], function(){
	Route::get('/', function(){
		echo "belajar/admin";
	});

	Route::get('/isi-soal', 'Belajar\SoalController@index');

	Route::get('/soal', 'Belajar\SoalController@get');
	Route::get('/soal/tambah', 'Belajar\SoalController@store');
	Route::get('/soal/edit', 'Belajar\SoalController@edit');
	Route::post('/soal/update', 'Belajar\SoalController@update');
	Route::get('/soal/delete', 'Belajar\SoalController@delete');
});

// $router->group(['prefix'=>'belajar'], function($app){
//     $app->get('/', 'Belajar\JawabController@index');
//     // $app->get('/jawab-soal');

//     $app->group(['prefix'=>'admin'], function($app){
//         $app->get('/', function(){
//             echo "belajar/admin";
//         });
//         $app->get('/isi-soal', 'Belajar\SoalController@index');
//         $app->post('/soal', 'Belajar\SoalController@store');
//     });
// });
