<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Test extends Component
{
    public $post;
    public $comments;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($post, $comments)
    {
        $this->post = $post;
        $this->comments = $comments;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return <<<'blade'
<div>
    <main class="container">
        <div class="row">
            <div class="col-md-8">

                <div class="blog-post mb-3">
                    <h2 class="blog-post-title">
                        {{ $post->title }}
                    </h2>
                    <p class="blog-post-meta">بقلم
                        <a href="#">{{ $post->author }}</a>
                        {{ Carbon\Carbon::parse($post->created_at)->diffForHumans() }}
                        {{-- {{ $post->created_at }} --}}
                    </p>

                    <p>
                        {{ $post->body }}
                    </p>

                    <h2>التعليقات: </h2>
                    {{-- @foreach ($post->comments()->get as $comment) --}} {{-- in web.php (route or in PostController I rewrite this line) --}}
                    {{-- @foreach ($post->comments as $comment) --}} {{-- because the bast line we make this line in comment but it works if you try it --}}

                    @if (count($comments) == 0)
                        <h3> لا يوجد تعليقات</h3>
                    @else
                        @foreach ($comments as $comment)
                            <h4>
                                {{ $comment->name }}
                            </h4>
                            <p>
                                {{ $comment->body }}
                            </p>
                        @endforeach
                    @endif
                </div>

                
blade;
    }
}
