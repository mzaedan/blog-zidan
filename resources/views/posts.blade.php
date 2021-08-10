@extends('layouts.main')

@section('content')

<h3 class="mb-3 text-center">{{ $title }}</h3>

<div class="row justify-content-center mb-3">
   <div class="col-md-6">
      <form action={{ url('/blog') }}>
         <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search..." name="search">
            <button class="btn btn-danger" type="submit">Search</button>
          </div>
      </form>
   </div>
</div>

@if ($posts->count())

<div class="card mb-3">
   <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="...">
   <div class="card-body text-center">
     <h3 class="card-title"><a href="/coba-laravel/public/posts/{{ $posts[0]->id }}" class="text-decoration-none text-dark" >{{ $posts[0]->title }}</a></h3>
     <p>
         <small class="text-muted">
            <p>By. <a href="/coba-laravel/public/authors/{{ $posts[0]->user->username }}" class="text-decoration-none">{{ $posts[0]->user->name }}</a> <a href="/coba-laravel/public/categories/{{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
         </small>
     </p>

     <p class="card-text">{{ $posts[0]->excerpt }}</p>

     <a href="/coba-laravel/public/posts/{{ $posts[0]->id }}" class="text-decoration-none btn btn-primary">Read More</a>

   </div>
</div>


<div class="container">
   <div class="row">
      @foreach ($posts->skip(1) as $posts)
      <div class="col-md-4 col mb-3">
         <div class="card">
            <div class="position-absolute px-3 py-2" style="background-color: rgb(0, 0, 0, 0.7)"><a href="/coba-laravel/public/categories/{{ $posts->category->slug }}" class="text-white text-decoration-none" }}>{{ $posts->category->name }}</a></div>
               <img src="https://source.unsplash.com/500x400?{{ $posts->category->name }}" class="card-img-top" alt="{{ $posts->category->name }}">
               <div class="card-body text-center">
                  <h5 class="card-title">{{ $posts->title }}</h5>
                     <p>
                        <small class="text-muted">
                           <p>By. <a href="/coba-laravel/public/authors/{{ $posts->user->username }}" class="text-decoration-none">{{ $posts->user->name }}</a>
                        </small>
                     </p>
      
                    <p class="card-text">{{ $posts->excerpt }}</p>
                  <a href="/coba-laravel/public/posts/{{ $posts->id }}" class="btn btn-primary">Read more</a>
               </div>
            </div>
         </div>
         @endforeach
      </div>
   </div>
</div>

@else
<p class="text-center fs4">No Post Found</p>
@endif

@endsection

