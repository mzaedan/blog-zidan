@extends('layouts.main')

@section('content')

<div class="row justify-content-center md-5">
    <div class="col-md-4">

      @if(session()->has('success'))  
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif

        <main class="form-signin">
            <form>
              {{-- <img class="mb-4" src="" alt="" width="72" height="57"> --}}
              <h1 class="h3 mb-3 fw-normal text-center">Please Log In</h1>
          
              <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
              </div>
              <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div>
          
              <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Log in</button>
        
            </form>
            <small class="d-block text-center mt-3">Not Registered? <a href={{ url('/register') }}>Register Now!</a><small>
          </main>
    </div>
</div>
         
@endsection