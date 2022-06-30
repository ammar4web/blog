<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-+qdLaIRZfNu4cVPK/PxJJEy0B0f3Ugv8i482AKY7gwXwhaCroABd086ybrVKTa0q" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        {{-- <form action="/posts/store" method="POST"> --}} {{-- this was wrong (/store) --}}
        {{-- @include('posts.form') --}}
        <form action="/posts" method="POST">
            <x-form />
            <button type="submit" class="btn btn-primary">حفظ</button>
        </form>
    </div>
</body>

</html>
