@extends('layouts.main')

@section('content')

<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-8">

         <h1 class="mb-3">{{ $title }}</h1>

         <p>By. <a href="/blog?user={{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/coba-laravel/public/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

         <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">

         <article class="my-3 fs-5">
            {!! $post->body !!}
         </article>

         

         <a href={{ url('/blog') }} class="text-decoration-none d-block mt-3">Back To Posts</a>

      </div>
   </div>
</div>
    
@endsection