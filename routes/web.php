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
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home'); 
//List all instructors
Route::get('/instructors', 'instructor94233Controller@index');
//View a single instructor
Route::get('/instructor/{id}', 'instructor94233Controller@show');
//Add a new workout session
Route::post('/session',[ 
'middleware' => 'auth',
'uses' => 'session94233Controller@store'
]);
//View workout sessions
Route::get('/sessions',[ 
    'middleware' => 'auth',
    'uses' => 'session94233Controller@show'
    ]);
//view users profile
Route::get('/users', [ 
    'middleware' => 'auth',
    'uses' => 'user94233Controller@index'
    ]);
//view user profile
Route::get('/user/{id}', [ 
    'middleware' => 'auth',
    'uses' => 'user94233Controller@show'
    ]);
//List all gym locations
Route::get('/locations', 'gym_location94233Controller@index');
