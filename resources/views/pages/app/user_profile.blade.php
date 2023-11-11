@extends('layouts.app')

@section('title', 'CODER - User Profile')

@section('content')
  <section>
    <div class="container">
      <div class="row">
        <div class="col p-4"
          style="background: rgba(255, 255, 255, 0.15); border-radius: 10px; backdrop-filter: blur(5px);">

          <div class="row d-flex align-items-center">
            <div class="col-md-3">
              <div class="rounded-2 overflow-hidden" style="width: 250px; height: 250px;">
                <img src="{{ asset('assets/img/photo-profile.jpg') }}" alt="" width="100%" height="100%">
              </div>
            </div>
            <div class="col-md-3">
              <div class="text-white">
                <h3>Irfan Yasin</h3>
                <p>Web Developer</p>
                <br>
                <div class="fw-light">
                  <div class="fw-light">irfanyasin@gmail.com</div>
                  <div class="fw-light">Informatika</div>
                  <div class="fw-light">2022</div>
                  <div class="fw-light">087859967039</div>
                </div>
              </div>
            </div>
            <div class="col-md-3 d-flex justify-content-center">
              <div class="text-white text-center">
                <h1 class="fw-bold" style="font-size: 60pt;">13</h1>
                <p>Absensi</p>
              </div>
            </div>
            <div class="col-md-3 d-flex justify-content-center">
              <div class="text-white text-center">
                <h1 class="fw-bold" style="font-size: 60pt;">5</h1>
                <p>Project</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
