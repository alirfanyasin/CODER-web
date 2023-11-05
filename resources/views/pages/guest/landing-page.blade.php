@extends('layouts.template')
@section('title', 'CODER - Landing Page')

@section('content')
  {{-- Navbar - Start --}}
  <nav class="navbar navbar-expand-lg" style="background: rgba(255, 255, 255, 0.19); backdrop-filter: blur(100px);">
    <div class="container">
      <a class="navbar-brand text-white" href="#">
        <img src="{{ asset('assets/img/second-logo.png') }}" alt="Logo Coder IT Telkom Surabaya" style="width: 100px">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="me-auto"></div>
        <div class="navbar-nav">
          <a class="nav-link text-white active" aria-current="page" href="#">Home</a>
          <a class="nav-link mx-3 text-white" href="#">About</a>
          <a class="nav-link mx-3 text-white" href="#">Event</a>
          <a class="nav-link mx-3 text-white" href="#">Gallery</a>
          <a class="nav-link mx-3 text-white" href="#">News</a>
          <a class="nav-link text-white" href="#">E-Learning</a>
        </div>
      </div>
    </div>
  </nav>
  {{-- Navbar - End --}}
  <div class="container" id="hero-section">
    <div class="row d-flex justify-content-between align-items-center">
      <div class="col-md-6 text-white">
        <div class="position-relative">
          <h1 class="fw-bold">Creativity on Digital Environment in
            Room of Technology</h1>
          <p class="fw-light">CODER merupakan Unit Kegiatan Mahasiswa (UKM) dari Institut Teknologi Telkom Surabaya.
            Kami
            berfokus pada
            teknologi pengembangan software</p>
          <div class="mt-5">
            <a href="" class="btn-main">Join Us</a>
            <a href="" class="btn-second mx-3">See More</a>
          </div>
        </div>
        <div class="Ellipse5 position-absolute"
          style="width: 660px; height: 660px; background: linear-gradient(216deg, #740200 0%, #01012D 100%); box-shadow: 10px 2px 50px rgba(255, 255, 255, 0.09); border-radius: 9999px; margin-left: -450px; margin-top: -100px; z-index: -99;">
        </div>
      </div>
      <div class="col-md-6">
        <img src="{{ asset('assets/img/illustration-1.png') }}" alt="illustration one" class="w-100">
        <div class="Ellipse3 position-absolute"
          style="width: 477px; height: 477px; background: rgba(255, 0, 153, 0.48); box-shadow: 400px 400px 400px; border-radius: 9999px; filter: blur(100px); z-index: -99; margin-top: -1000px;">
        </div>
        <div class="Ellipse1 position-absolute"
          style="width: 1000px; height: 1000px; background: rgba(0, 207.93, 221.20, 0.23); box-shadow: 400px 400px 400px; border-radius: 9999px; filter: blur(100px); z-index: -99; margin-right: -350px; margin-top: -200px;">
        </div>
      </div>
    </div>
  </div>

  <div class="container" id="about-section">
    <div class="row text-center position-relative mb-5">
      <h2 class="fw-semibold text-white">About Us</h2>
      <div class="d-flex justify-content-center position-absolute mt-5">
        <img src="{{ asset('assets/img/about-us.png') }}" alt="">
      </div>
    </div>
    <div class="row" style="margin: 70px auto;">
      <div class="col-md-6">
        <img src="{{ asset('assets/img/illustration-2.png') }}" alt="" class="w-100">
      </div>
      <div class="col-md-6 p-5"
        style="background: rgba(255, 255, 255, 0.13); border-radius: 20px; backdrop-filter: blur(60px);">
        <div class="text-white mb-5">
          <h3>Visi</h3>
          <p class="fw-light my-4">Mewadahi bakat dan minat mahasiswa di bidang Teknologi, Informasi, dan Komunikasi untuk
            berkontribusi
            terhadap Institut Teknologi Telkom Surabaya dan lingkungan sekitar.</p>
        </div>
        <div class="text-white mt-5">
          <h3>Misi</h3>
          <ol type="1" class="my-4">
            <li class="fw-light">Membantu dan mendukung untuk mewadahi mahasiswa ITTelkom Surabaya yang memiliki bakat dan
              minat dalam bidang Teknologi Informasi dan Komunikasi.</li>
            <li class="fw-light">Membantu dan mendukung ITTelkom Surabaya untuk melakukan pengembangan Teknologi Informasi
              dan Komunikasi.</li>
            <li class="fw-light">Berkontribusi untuk lingkungan sekitar melalui Teknologi Informasi dan Komunikasi yang
              bermanfaat.</li>
          </ol>

        </div>
      </div>
    </div>
  </div>

@endsection
