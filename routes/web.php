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

// Route::get('/homepage', function () {
//     return view('posts.index');
// });


Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');

// Route::get('/home', 'PostController@home');



/* resource('post','PostController'),
that's going to automatically map routes to those functions
*/
Route::resource('posts','PostsController');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

