<?php

use Illuminate\Support\Facades\Route;


$resp = Http::get('https://jsonplaceholder.typicode.com/posts');

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', "PostController@index")->name('index'); 
Route::get('/post/{id}', "PostController@show")->name('post.show');
