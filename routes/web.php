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
//    dd(\App\User::find(1)->articles());
    dd(\App\User::has('articles')->get());
    //return \App\User::all()->articles();
//    return \App\Article::all();
});

Route::get('/temp', function () {
//    dd(\App\User::find(1)->articles());
    dd(\App\User::doesntHave('articles')->get());
    //return \App\User::all()->articles();
//    return \App\Article::all();
});
//Route::get('/', function () {
//    return view('welcome');
//});
