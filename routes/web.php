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
    return view('homepage');
});

Route::get('/homepage', function () {
    return view('homepage');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/blogs', 'BlogController@show');



//important!!
Route::get('blog/{id}', 'BlogController@blogShow');

//Route::get('test/{id}','test',['name' => $id]);

Route::get('/welcome', function () {
    return view('welcome');
});

Route::post('/blogs/add', 'BlogController@add');
Route::post('/blogs/edit/{id}', 'BlogController@edit');
Route::get('/blogs/edit/{id}', 'BlogController@editShow');
Route::get('/blogs/add', function (){
    return view('addBlog');
});

