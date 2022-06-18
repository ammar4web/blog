{{-- @extends('posts.layout')

@section('title', $post->title)

@section('content') --}}
<x-layout>
    <x-post :post="$post" :comments="$comments" />
</x-layout>

{{-- @endsection --}}
