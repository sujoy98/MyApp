<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/login', 'PagesController@login');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');
/* resource('post','PostController'),
will create all the routes from the functions we created
*/
Route::resource('post','PostController');
