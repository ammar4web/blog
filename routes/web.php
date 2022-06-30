<?php

use App\Http\Controllers\PostsController;
use App\Models\Post;
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


// Route::get('/posts', function () {
//     $posts = DB::table('posts')->orderBy('created_at', 'desc')->get();
//     return view('posts.index', compact('posts'));
// });

// Route::get('/posts', [PostsController::class, 'index']);

// Route::get('posts/create', [PostsController::class, 'create']);

// Route::post('/posts/store', [PostsController::class, 'store']);

// Route::get('/posts/{id}', [PostsController::class, 'show']);

// 
Route::resource('posts', PostsController::class);
Route::post('/posts/{post}/comments', [CommentesController::class, 'store']);
// 

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