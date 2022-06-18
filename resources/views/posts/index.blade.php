{{-- this line is importent to work HTML tage --}}
{{-- {!! '<script> alert("hi") </script>' !!} --}}

@extends('posts.layout')
{{-- @section('title', $post->title) --}}


@section('content')
    <main class="container">

        <div class="row">
            <div class="col-md-8">

                @foreach ($posts as $post)
                    <div class="blog-post mb-3">
                        <h2 class="blog-post-title">
                            <a href="posts/{{ $post->id }}">{{ $post->title }}</a>
                        </h2>
                        <p class="blog-post-meta">بقلم
                            <a href="#">{{ $post->author }}</a>
                            {{ Carbon\Carbon::parse($post->created_at)->diffForHumans() }}
                            {{-- {{ $post->created_at }} --}}
                        </p>
                    </div>
                @endforeach

                <nav class="blog-pagination" aria-label="Pagination">
                    <a class="btn btn-outline-primary" href="#">تدوينات أقدم</a>
                    <a class="btn btn-outline-secondary disabled">تدوينات أحدث</a>
                </nav>

            </div>

            <div class="col-md-4">
                <div class="position-sticky" style="top: 2rem;">
                    <div class="p-4 mb-3 bg-light rounded">
                        <h4 class="fst-italic">حول</h4>
                        <p class="mb-0">أقبلت، فأقبلت معك الحياة بجميع صنوفها وألوانها: فالنبات ينبت، والأشجار تورق
                            وتزهر، والهرة تموء، والقمري يسجع، والغنم يثغو، والبقر يخور، وكل أليف يدعو أليفه. كل شيء يشعر
                            بالحياة وينسي هموم الحياة، ولا يذكر إلا سعادة الحياة، فإن كان الزمان جسدا فأنت روحه، وإن كان
                            عمرا فأنت شبابه.</p>
                    </div>

                    <div class="p-4">
                        <h4 class="fst-italic">الأرشيف</h4>
                        <ol class="list-unstyled mb-0">
                            <li><a href="#">مارس 2021</a></li>
                            <li><a href="#">شباط 2021</a></li>
                            <li><a href="#">يناير 2021</a></li>
                            <li><a href="#">ديسمبر 2020</a></li>
                            <li><a href="#">نوفمبر 2020</a></li>
                            <li><a href="#">أكتوبر 2020</a></li>
                            <li><a href="#">سبتمبر 2020</a></li>
                            <li><a href="#">اغسطس 2020</a></li>
                            <li><a href="#">يوليو 2020</a></li>
                            <li><a href="#">يونيو 2020</a></li>
                            <li><a href="#">مايو 2020</a></li>
                            <li><a href="#">ابريل 2020</a></li>
                        </ol>
                    </div>

                    <div class="p-4">
                        <h4 class="fst-italic">في مكان آخر</h4>
                        <ol class="list-unstyled">
                            <li><a href="#">GitHub</a></li>
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Facebook</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
