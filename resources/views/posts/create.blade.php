<x-layout>
    {{-- <form action="/posts/store" method="POST"> --}} {{-- this was wrong (/store) --}}
    {{-- @include('posts.form') --}}
    <form action="/posts" method="POST">
        <x-form />
        <button type="submit" class="btn btn-primary">حفظ</button>
    </form>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</x-layout>
