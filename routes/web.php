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
    return view('welcome', [
        'articles'=> App\Article::take(3)->latest()->get()
    ]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/articles','ArticleController@index');
Route::get('/articles/{article}','ArticleController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
