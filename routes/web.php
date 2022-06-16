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
// http://blog.test/ 

Route::get('new', function () {
    return view("hello");
});
// http://blog.test/hello

Route::get('/hello2/{name}', function ($name) {
    return view("hello2", compact('name'));
});
// http://blog.test/hello2/ammar

Route::view('/hello', 'hello');
// http://blog.test/hello
