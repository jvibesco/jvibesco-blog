@extends('layouts.main')
@section('container')

<div class="row justify-content-center">
    <div class="col-lg-5">

      @if (session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div> 
      @endif

      @if (session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div> 
      @endif

        <main class="form-signin">
            <h1 class="h3 mb-3 fw-normal text-center">Please Sign in</h1>
            <form action="/login" method="POST">
              @csrf  
              <div class="form-floating">
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" name="email" placeholder="name@example.com" required value={{ old('email') }}>
                <label for="floatingInput">Email address</label>
                <div class="invalid-feedback">
                  @error('email')
                    {{ $message }}
                  @enderror
                </div>
              </div>
              <div class="form-floating">
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" name="password" placeholder="Password" required>
                <label for="floatingPassword">Password</label>
                <div class="invalid-feedback">
                  @error('password')
                    {{ $message }}
                  @enderror
                </div>
              </div>
          
              <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
            </form>
            <small class="d-block mt-2">
                Not Registered? <a href="/register">Register Now!</a>
            </small>
          </main>
    </div>
</div>
@endsection