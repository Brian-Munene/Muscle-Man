<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//login and sign up 
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home'); 
//List all instructors
Route::get('/instructors', 'instructor94233Controller@index');
//View a single instructor
Route::get('/instructor/{id}', 'instructor94233Controller@show');
//Add a new workout session
Route::post('/session',[ 
'middleware' => 'auth:api',
'uses' => 'session94233Controller@store'
]);
//View workout sessions
Route::get('/sessions/{id}',[ 
    'middleware' => 'auth:api',
    'uses' => 'session94233Controller@show'
    ]);
//view users profile
Route::get('/users', [ 
    'middleware' => 'auth:api',
    'uses' => 'user94233Controller@index'
    ]);
//view user profile
Route::get('/user/{id}', [ 
    'middleware' => 'auth:api',
    'uses' => 'user94233Controller@show'
    ]);
//List all gym locations
Route::get('/locations', 'gym_location94233Controller@index');
