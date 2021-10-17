@extends('layouts.main')
@section('container')
    @foreach ($posts as $post)
    <article class="mb-3 border-bottom pb-3">
        <h2> 
        <a href="/blog/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
        </h2>
            <p class="mb-4">By : <a href="/authors/{{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a> in 
                <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a>
            </p>
        <p>{{ $post->excerpt }}</p>

        <a href="/blog/{{ $post->slug }}" class="text-decoration-none">Read more..</a>
    </article>
        
    @endforeach    
@endsection

