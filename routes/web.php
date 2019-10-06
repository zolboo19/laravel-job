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

use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
    //hello
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/test_hello/{name}/{age}', 'HomeController@test_hello')->name('test_hello');

Route::get('/users', 'UserController@index')->name('users.index');

Route::get('/user', 'TaskController@index');

Route::get('/user/{usr}', 'TaskController@create')->name('jobs.create');

Route::get('/create', 'TaskController@create')->name('jobs.create');
Route::post('/create', 'TaskController@store')->name('jobs.store');


