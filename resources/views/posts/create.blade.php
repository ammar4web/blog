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
        {{-- <form action="/posts/store" method="POST"> --}} {{-- this was wrong (/store)--}}
        <form action="/posts" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">عنوان المقالة</label>
                <input type="text" name="title" id="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="body">نص المقالة</label>
                <textarea name="body" id="body" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="author">كاتب المقالة</label>
                <input type="text" name="author" id="author" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">حفظ</button>
        </form>
    </div>
</body>

</html>
