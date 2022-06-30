<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $posts = DB::table('posts')->latest()->get();
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Post::created([
        //     'title' => request('title'),
        //     'body' => request('body'),
        //     'author' => request('author'),
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        //     'id' => 3,
        // ]);

        // 

        // DB::table('posts')->insert([
        //     'title' => request('title'),
        //     'body' => request('body'),
        //     'author' => request('author'),
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        // ]);
        $this->validatePost();
        Post::create([
            'title' => request('title'),
            'body' => request('body'),
            'author' => request('author'),
        ]);

        // return back();
        return redirect('/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    public function show(Post $post)
    {
        // $post = DB::table('posts')->find($id);
        // $post = Post::find($id);
        // 
        // 
        // $post = Post::findOrFail($post);

        $comments = $post->comments()->where('approved', 1)->get();

        // 

        // return view('posts.show', compact('post'));
        return view('posts.show', compact('post', 'comments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    public function edit(POST $post)
    {
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $this->validatePost();
        $post->update([
            'title' => request('title'),
            'body' => request('body'),
            'author' => request('author'),
        ]);
        return redirect('/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function validatePost()
    {
        request()->validate([
            'title' => 'required|unique:posts|max:5',
            'body' => ['required', 'unique:posts', 'max:10'],
            'author' => 'required'
        ]);
    }
}
