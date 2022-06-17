<?php

use Illuminate\Support\Facades\Route;

// for database
use Illuminate\Support\Facades\DB;
// for date and time
use Carbon\Carbon;

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

Route::view('posts/create', 'posts.create');

Route::post('/posts/store', function () {
    DB::table('posts')->insert([
        'title' => request('title'),
        'body' => request('body'),
        'author' => request('author'),
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ]);

    return back();
});

// Route::get('/posts', function () {
//     $posts = DB::table('posts')->orderBy('created_at', 'desc')->get();
//     return view('posts.index', compact('posts'));
// });

Route::get('/posts', function () {
    $posts = DB::table('posts')->latest()->get();
    return view('posts.index', compact('posts'));
});

Route::get('/posts/{id}', function($id) {
    $post = DB::table('posts')->find($id);
    return view('posts.show', compact('post'));
});

//     $postUp = DB::table('posts')->where('id', '=', 3)->update(['title' => 'المقالة 3']);
//     $postUp = DB::table('posts')->where('id', '=', 3)->delete());


// these is wrong
// Route::view ('posts/edit', 'posts.edit');

// Route::post('/posts/update', function(){
//     $postUp = DB::table('posts')->where('id', '=', 3)->update(['title' => 'المقالة 3']);
// });

// Route::post('/posts/delete', function(){
//     $postUp = DB::table('posts')->where('id', '=', 3)->delete());
// });