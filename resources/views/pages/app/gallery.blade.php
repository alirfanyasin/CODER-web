@extends('layouts.app')

@section('title', 'CODER - Gallery')

@section('content')
  <section>
    <div class="breadcrumb d-flex justify-content-between align-items-center text-white">
      <h1>Gallery</h1>
      <div>
        <a href="{{ route('admin.gallery.create') }}" class="btn-main">Add Gallery</a>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4 col-md-6 mb-3">
        <div class="card p-3"
          style="background: rgba(255, 255, 255, 0.13); border-radius: 20px; backdrop-filter: blur(5px);">
          <img src="{{ asset('assets/img/img-1.png') }}" class="card-img-top" alt="...">
          <div class="text-white pt-4">
            <h5 class="">Card title</h5>
            <p class="fw-light">Some quick example text to build on the card title.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-3">
        <div class="card p-3"
          style="background: rgba(255, 255, 255, 0.13); border-radius: 20px; backdrop-filter: blur(5px);">
          <img src="{{ asset('assets/img/img-1.png') }}" class="card-img-top" alt="...">
          <div class="text-white pt-4">
            <h5 class="">Card title</h5>
            <p class="fw-light">Some quick example text to build on the card title.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-3">
        <div class="card p-3"
          style="background: rgba(255, 255, 255, 0.13); border-radius: 20px; backdrop-filter: blur(5px);">
          <img src="{{ asset('assets/img/img-1.png') }}" class="card-img-top" alt="...">
          <div class="text-white pt-4">
            <h5 class="">Card title</h5>
            <p class="fw-light">Some quick example text to build on the card title.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-3">
        <div class="card p-3"
          style="background: rgba(255, 255, 255, 0.13); border-radius: 20px; backdrop-filter: blur(5px);">
          <img src="{{ asset('assets/img/img-1.png') }}" class="card-img-top" alt="...">
          <div class="text-white pt-4">
            <h5 class="">Card title</h5>
            <p class="fw-light">Some quick example text to build on the card title.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-3">
        <div class="card p-3"
          style="background: rgba(255, 255, 255, 0.13); border-radius: 20px; backdrop-filter: blur(5px);">
          <img src="{{ asset('assets/img/img-1.png') }}" class="card-img-top" alt="...">
          <div class="text-white pt-4">
            <h5 class="">Card title</h5>
            <p class="fw-light">Some quick example text to build on the card title.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-3">
        <div class="card p-3"
          style="background: rgba(255, 255, 255, 0.13); border-radius: 20px; backdrop-filter: blur(5px);">
          <img src="{{ asset('assets/img/img-1.png') }}" class="card-img-top" alt="...">
          <div class="text-white pt-4">
            <h5 class="">Card title</h5>
            <p class="fw-light">Some quick example text to build on the card title.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-3">
        <div class="card p-3"
          style="background: rgba(255, 255, 255, 0.13); border-radius: 20px; backdrop-filter: blur(5px);">
          <img src="{{ asset('assets/img/img-1.png') }}" class="card-img-top" alt="...">
          <div class="text-white pt-4">
            <h5 class="">Card title</h5>
            <p class="fw-light">Some quick example text to build on the card title.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
