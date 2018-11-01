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

Route::group(['prefix' => '' ], function() {
    Route::get('locate/{language}', 'HomeController@locate');
});

Route::group(['prefix'=>'program'],   function() {
    Route::get('/', 'ProgramController@index');
});

Route::group(['prefix'=>'university-page'],   function() {
    Route::get('/', 'UniversityController@index');
});
