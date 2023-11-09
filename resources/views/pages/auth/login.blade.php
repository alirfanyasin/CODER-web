@extends('layouts.auth')

@section('title', 'CODER - Sign In')

@section('content')
  <div class="container" style="z-index: 100">
    <div class="row d-flex justify-content-center">
      <div class="col-md-4">
        <div class="card p-4">
          <div class="d-flex justify-content-center">
            <img src="{{ asset('assets/img/second-logo.png') }}" alt="" width="50%">
          </div>

          <form action="" class="mt-5">
            <div class="input-group">
              <input type="text" name="email" class="form-control mb-3 text-white fw-light"
                style="height: 50px; background: rgba(255, 255, 255, 0.02);  border-radius: 10px; border: none; border-bottom: 2px solid white;
                  backdrop-filter: blur(5px);"
                id="email" placeholder="Email Address">
            </div>
            <div class="input-group">
              <input type="password" name="password" class="form-control mb-3 text-white fw-light"
                style="height: 50px; background: rgba(255, 255, 255, 0.02);  border-radius: 10px; border: none; border-bottom: 2px solid white;
                  backdrop-filter: blur(5px);"
                id="email" placeholder="Password">
            </div>
            <div class="mb-3 d-flex justify-content-end">
              <a href="" class="text-white text-decoration-none fw-light">Forgot Password?</a>
            </div>
            <div class="mb-3">
              <button type="submit" class="btn-auth">Sign In</button>
            </div>
            <div class="text-center text-white">
              <p class="mb-4">Or</p>
              <a href="">
                <img src="{{ asset('assets/img/icon-google.png') }}" alt="">
              </a>
              <p class="mt-4 fw-light">Don't have an accout? <a href="{{ route('register') }}"
                  class="fw-semibold text-white text-decoration-none">Sign Up</a></p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>


  <div class="Ellipse12 position-absolute"
    style="width: 870px; height: 870px; transform: rotate(74.92deg); transform-origin: 0 0; background: linear-gradient(220deg, #01012D 0%, #900505 100%); border-radius: 9999px; bottom: -250px; left: 600px;">
  </div>
  <div class="Ellipse15 position-absolute"
    style="width: 630px; height: 628px; transform: rotate(118.56deg); transform-origin: 0 0; background: linear-gradient(220deg, #01012D 0%, #900505 100%); border-radius: 9999px; right: -900px; top: -200px; z-index: 99;">
  </div>

  <div class="Ellipse13 position-absolute"
    style="width: 700px; height: 700px; background: rgba(0, 207.93, 221.20, 0.30); box-shadow: 500px 500px 500px; border-radius: 9999px; filter: blur(200px); right: -100px; top: -100px">
  </div>
  <div class="Ellipse14 position-absolute"
    style="width: 660px; height: 600px; background: rgba(196.72, 72.89, 255, 0.60); box-shadow: 600px 600px 600px; border-radius: 9999px; filter: blur(200px); left: -60px; top: -300px">
  </div>

@endsection
