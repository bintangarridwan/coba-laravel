@extends('layouts.main')

@section('container')
    <article>
        <h2 class="mb-3">{{ $posts->title }}</h2>

        <p class="mb-4">By : <a href="/authors/{{ $posts->user->username }}" class="text-decoration-none">{{ $posts->user->name }}</a> 
            in <a href="/categories/{{ $posts->category->slug }}" 
                class="text-decoration-none">{{ $posts->category->name }}</a></p>

        {!! $posts->body !!}
    </article>
    <a href="/blog" class="d-block mt-3">Back To Post</a>
@endsection