@extends('layouts.main')
@section('container')

<div class="row justify-content-center">
    <div class="col-lg-5">
        <main class="form-registration">
            <h1 class="h3 mb-3 fw-normal text-center">Please Register</h1>
            <form action="/register" method="POST">
              @csrf  
              <div class="form-floating">
                <input type="text" class="form-control rounded-top @error('name') is-invalid @enderror" id="floatingInput" name="name" placeholder="Your Name" required value={{ old('name') }}>
                <label for="floatingInput">Your Name</label>
                <div class="invalid-feedback">
                  @error('name')
                    {{ $message }}
                  @enderror
                </div>
              </div>
              <div class="form-floating">
                <input type="text" class="form-control @error('username') is-invalid @enderror" id="floatingInput" name="username" placeholder="Username" required value={{ old('username') }}>
                <label for="floatingInput">Username</label>
                <div class="invalid-feedback">
                  @error('username')
                    {{ $message }}
                  @enderror
                </div>
              </div>
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
                <input type="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="floatingPassword" name="password" placeholder="Password">
                <label for="floatingPassword">Password</label>
                <div class="invalid-feedback">
                  @error('password')
                    {{ $message }}
                  @enderror
                </div>
              </div>
          
              <button class="w-100 btn btn-lg btn-primary mt-2" type="submit">Register</button>
            </form>
            <small class="d-block mt-2">
                Registered? <a href="/login">Login Now!</a>
            </small>
          </main>
    </div>
</div>
@endsection
@section('container')

<div class="row justify-content-center">
    <div class="col-lg-4">
        <main class="form-signin">
            <h1 class="h3 mb-3 fw-normal text-center">Please Sign in</h1>
            <form>  
              <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
              </div>
              <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
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