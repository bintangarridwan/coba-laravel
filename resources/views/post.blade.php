@extends('layouts.main')

@section('container')
    <article>
        <h2 class="mb-3">{{ $posts->title }}</h2>

        <p class="mb-4">By : Bintang Rajamuda in <a href="/categories/{{ $posts->category->slug }}">{{ $posts->category->name }}</a></p>

        {!! $posts->body !!}
    </article>
    <a href="/blog">Back To Post</a>
@endsection