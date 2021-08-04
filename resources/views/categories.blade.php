@extends('layouts.main')

@section('content')

<h3 class="mb-5">Post Categories</h3>

   @foreach ($categories as $category)
   <ul>
       <li>
        <h2><a href="/coba-laravel/public/categories/{{ $category->slug }}">{{ $category->name }}</a></h2>
       </li>
   </ul>

@endforeach
    
@endsection



