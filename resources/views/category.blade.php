@extends('layouts.main')

@section('content')

<h3 class="mb-5">Post Category : {{ $category }}</h3>

   @foreach ($posts as $post)
   <article class="mb-5">
      <h2><a href="/coba-laravel/public/posts/{{ $post->id }}">{{ $post->title }}</a></h2>
      <p>{{ $post->excerpt }}</p>
   </article>

@endforeach
    
@endsection



