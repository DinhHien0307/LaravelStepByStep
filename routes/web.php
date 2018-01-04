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

Route::get('/about', function () {
    return "The About Page";
});

Route::get('get-form', ['uses'=> 'handleController@getForm']);
Route::post('handle-form', ['uses'=> 'handleController@handleRequest']);

Route::get('/', 'PostsController@index');
Route::get('/posts/{post}','PostsController@show');
