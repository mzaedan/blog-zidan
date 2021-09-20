@extends('dashboard.layouts.main')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">My Posts</h1>
</div>

{{-- @if(session()->has('success'))
<div class="alert alert-success" role="alert">
  {{ session('success') }}
</div>
@endif --}}

<div class="table-responsive col-lg-9">
  <a href={{ url('/dashboard/posts/create') }} class="btn btn-primary mb-3">Create New Posts</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Title</th>
          <th scope="col">Category</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($posts as $post)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $post->title }}</td>
          <td>{{ $post->category->name }}</td>
          <td>
              <a href="/coba-laravel/public/dashboard/posts/{{ $post->slug }}" class="badge bg-info"><span data-feather="eye"></span></a>
              <a href="/coba-laravel/public/dashboard/posts/{{ $post->id }}" class="badge bg-warning"><span data-feather="edit"></span></a>
              <a href="/coba-laravel/public/dashboard/posts/{{ $post->id }}" class="badge bg-danger"><span data-feather="trash"></span></a>
          </td>
        </tr>
      </tbody>
      @endforeach
    </table>
  </div>
@endsection