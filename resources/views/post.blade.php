@extends('layouts.main')

@section('content')
   <h1 class="mb-5">{{ $post->title }}</h1>

   <p>By. <a href="/authors/{{ $post->user->username }}" class="text-decoration-none"></a> <a href="/coba-laravel/public/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

   {!! $post->body !!}

   <a href={{ url('/blog') }} class="text-decoration-none d-block mt-3">Back To Posts</a>
    
@endsection