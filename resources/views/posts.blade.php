@extends('layouts.main')

@section('content')

<h3 class="mb-3">{{ $title }}</h3>

   @foreach ($posts as $post)
   <article class="mb-5 border-bottom pb-4">
      <h2><a href="/coba-laravel/public/posts/{{ $post->id }}" class="text-decoration-none">{{ $post->title }}</a></h2>

      <p>By. <a href="/coba-laravel/public/authors/{{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a> <a href="/coba-laravel/public/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
      <p>{{ $post->excerpt }}</p>
      <a href="/coba-laravel/public/posts/{{ $post->id }}" class="text-decoration-none">Read More...</a>
   </article>

@endforeach
    
@endsection


