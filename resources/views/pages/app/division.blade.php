@extends('layouts.app')

@section('title', 'CODER - Division')

@section('content')
  <section>
    <div class="breadcrumb d-flex justify-content-between align-items-center text-white">
      <h1>Division</h1>
      <div>
        <a href="{{ route('admin.division.create') }}" class="btn-main">Add Division</a>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4 col-md-6 mb-4 text-white">
        <div class="px-2 py-4 text-center "
          style="background: rgba(255, 255, 255, 0.13); border-radius: 20px; backdrop-filter: blur(5px);">
          <div class="d-flex justify-content-center mb-4">
            <div class="d-flex justify-content-center align-items-center"
              style="width: 88px; height: 88px; background: rgba(255, 255, 255, 0.19); border-radius: 20px;">
              <img src="{{ asset('assets/img/icon-webdev.png') }}" alt="">
            </div>
          </div>
          <h5>Web Development</h5>
          <p class="fw-light">Melakukan pengembangan aplikasi berbasis Website</p>
          <div class="mt-4">
            <a href=""
              class="text-decoration-none text-white fw-light px-4 py-2 border-1 border-white border rounded-pill">View
              More</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4 text-white">
        <div class="px-2 py-4 text-center "
          style="background: rgba(255, 255, 255, 0.13); border-radius: 20px; backdrop-filter: blur(5px);">
          <div class="d-flex justify-content-center mb-4">
            <div class="d-flex justify-content-center align-items-center"
              style="width: 88px; height: 88px; background: rgba(255, 255, 255, 0.19); border-radius: 20px;">
              <img src="{{ asset('assets/img/icon-ui-ux.png') }}" alt="">
            </div>
          </div>
          <h5>UI/UX Designer</h5>
          <p class="fw-light">Melakukan proses Sketching, Wireframing, Mockup, hingga Prototype</p>
          <div class="mt-4">
            <a href=""
              class="text-decoration-none text-white fw-light px-4 py-2 border-1 border-white border rounded-pill">View
              More</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4 text-white">
        <div class="px-2 py-4 text-center "
          style="background: rgba(255, 255, 255, 0.13); border-radius: 20px; backdrop-filter: blur(5px);">
          <div class="d-flex justify-content-center mb-4">
            <div class="d-flex justify-content-center align-items-center"
              style="width: 88px; height: 88px; background: rgba(255, 255, 255, 0.19); border-radius: 20px;">
              <img src="{{ asset('assets/img/icon-mobile-dev.png') }}" alt="">
            </div>
          </div>
          <h5>Mobile Development</h5>
          <p class="fw-light">Melakukan pengembangan aplikasi berbasis Mobile App</p>
          <div class="mt-4">
            <a href=""
              class="text-decoration-none text-white fw-light px-4 py-2 border-1 border-white border rounded-pill">View
              More</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4 text-white">
        <div class="px-2 py-4 text-center "
          style="background: rgba(255, 255, 255, 0.13); border-radius: 20px; backdrop-filter: blur(5px);">
          <div class="d-flex justify-content-center mb-4">
            <div class="d-flex justify-content-center align-items-center"
              style="width: 88px; height: 88px; background: rgba(255, 255, 255, 0.19); border-radius: 20px;">
              <img src="{{ asset('assets/img/icon-comp.png') }}" alt="">
            </div>
          </div>
          <h5>Comp. Programming</h5>
          <p class="fw-light">Melakukan pengembangan algoritma pemrograman untuk berkompetisi</p>
          <div class="mt-4">
            <a href=""
              class="text-decoration-none text-white fw-light px-4 py-2 border-1 border-white border rounded-pill">View
              More</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4 text-white">
        <div class="px-2 py-4 text-center "
          style="background: rgba(255, 255, 255, 0.13); border-radius: 20px; backdrop-filter: blur(5px);">
          <div class="d-flex justify-content-center mb-4">
            <div class="d-flex justify-content-center align-items-center"
              style="width: 88px; height: 88px; background: rgba(255, 255, 255, 0.19); border-radius: 20px;">
              <img src="{{ asset('assets/img/icon-ai-software.png') }}" alt="">
            </div>
          </div>
          <h5>AI Software</h5>
          <p class="fw-light">Mengembangkan perangkat lunak berbasis kecerdasan artifisial</p>
          <div class="mt-4">
            <a href=""
              class="text-decoration-none text-white fw-light px-4 py-2 border-1 border-white border rounded-pill">View
              More</a>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
