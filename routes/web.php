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

/////////////////   Program  /////////////
Route::group(['prefix'=>'program'],   function() {
    Route::get('/', 'ProgramController@index');
});

/////////////////   University  /////////////
Route::group(['prefix'=>'university-page'],   function() {
    Route::get('/', 'UniversityController@index');
});

///////////////  Blog  /////////////////
Route::group(['prefix'=>'blog'],   function() {
    Route::get('/', 'BlogController@index');
    Route::get('/blog-article', 'BlogController@blog_article');
});

///////////////  Student  /////////////////
Route::group(['prefix'=>'student'],   function() {
    Route::get('/', 'StudentController@index');
    Route::get('/Info', 'StudentController@personalInfo');
    Route::get('/Info-summary', 'StudentController@InfoSummary');
    Route::get('/Info-destination', 'StudentController@InfoDestination');
    Route::get('/Info-scores', 'StudentController@InfoScores');
    Route::get('/profile', 'StudentController@profile');
    Route::get('/programs', 'StudentController@programs');
    Route::get('/favorites', 'StudentController@favorites');
});

///////////////  Representative /////////////////
Route::group(['prefix'=>'representative'],   function() {
    Route::get('/', 'RepresentativeController@index');
    Route::get('/profile', 'RepresentativeController@profile');
    Route::get('/institution', 'RepresentativeController@institution');
    Route::get('/institution-programs', 'RepresentativeController@institutionPrograms');
    Route::get('/programs', 'RepresentativeController@programs');
    Route::get('/application', 'RepresentativeController@application');
});

Auth::routes();

