@extends('layouts.template')
@section('title', 'CODER - Landing Page')

@section('content')
  {{-- Hero - start --}}
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
      <div class="col-md-6 position-relative">
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
  {{-- Hero - end --}}


  {{-- About - start --}}
  <div class="container" id="about-section">
    <header class="row text-center position-relative mb-5">
      <h2 class="fw-semibold text-white">About Us</h2>
      <div class="d-flex justify-content-center position-absolute mt-5">
        <img src="{{ asset('assets/img/about-us.png') }}" alt="" style="z-index: -99;">
      </div>
    </header>
    <div class="row" style="margin: 70px auto;">
      <div class="col-md-6">
        <img src="{{ asset('assets/img/illustration-2.png') }}" alt="" class="w-100">
      </div>
      <div class="col-md-6 position-relative">
        <div class="Ellipse4 position-absolute"
          style="width: 340px; height: 340px; background: linear-gradient(216deg, #740200 0%, #01012D 100%); box-shadow: 10px 2px 50px rgba(255, 255, 255, 0.09); border-radius: 9999px; z-index: -999; margin-left: 450px; margin-top: -150px;">
        </div>
        <div class="w-full p-5"
          style="background: rgba(255, 255, 255, 0.13); border-radius: 20px; backdrop-filter: blur(5px); z-index: 99;">
          <div class="mb-5">
            <div class="row">
              <div class="col-2">
                <div class="d-flex justify-content-center align-items-center"
                  style="background: rgba(255, 255, 255, 0.19); border-radius: 10px; width: 50px; height: 50px;">
                  <img src="{{ asset('assets/img/icon-visi.png') }}" alt="">
                </div>
              </div>
              <div class="col-10 text-white">
                <h3>Visi</h3>
                <p class="fw-light my-4">Mewadahi bakat dan minat mahasiswa di bidang Teknologi, Informasi, dan Komunikasi
                  untuk
                  berkontribusi
                  terhadap Institut Teknologi Telkom Surabaya dan lingkungan sekitar.</p>
              </div>
            </div>

          </div>
          <div class="mt-5">
            <div class="row">
              <div class="col-2">
                <div class="d-flex justify-content-center align-items-center"
                  style="background: rgba(255, 255, 255, 0.19); border-radius: 10px; width: 50px; height: 50px;">
                  <img src="{{ asset('assets/img/icon-visi.png') }}" alt="">
                </div>
              </div>
              <div class="col-10 text-white">
                <h3>Misi</h3>
                <ol type="1" class="my-4">
                  <li class="fw-light">Membantu dan mendukung untuk mewadahi mahasiswa ITTelkom Surabaya yang memiliki
                    bakat
                    dan
                    minat dalam bidang Teknologi Informasi dan Komunikasi.</li>
                  <li class="fw-light">Membantu dan mendukung ITTelkom Surabaya untuk melakukan pengembangan Teknologi
                    Informasi
                    dan Komunikasi.</li>
                  <li class="fw-light">Berkontribusi untuk lingkungan sekitar melalui Teknologi Informasi dan Komunikasi
                    yang
                    bermanfaat.</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <div class="Ellipse6 position-absolute"
          style="width: 200px; height: 200px; transform: rotate(180deg); transform-origin: 0 0; background: linear-gradient(216deg, #740200 0%, #01012D 100%); box-shadow: 10px 2px 50px rgba(255, 255, 255, 0.09); border-radius: 9999px; margin-left: 50px; margin-top: 80px;">
        </div>
      </div>
    </div>
  </div>
  {{-- About - end --}}



  {{-- Division - start --}}
  <div class="container position-relative" id="division-section">

    <div class="Ellipse7 position-absolute"
      style="width: 800px; height: 800px; background: rgba(0, 207.93, 221.20, 0.23); box-shadow: 400px 400px 400px; border-radius: 9999px; filter: blur(100px); margin-top: -200px;">
    </div>

    <header class="row text-center position-relative mb-5">
      <h2 class="fw-semibold text-white">Division</h2>
      <div class="d-flex justify-content-center position-absolute mt-5">
        <img src="{{ asset('assets/img/division.png') }}" alt="" style="z-index: -99;">
      </div>

    </header>



    <div class="row">
      <div class="col-md-4 mb-4 text-white">
        <div class="p-5 text-center "
          style="background: rgba(255, 255, 255, 0.13); border-radius: 20px; backdrop-filter: blur(5px);">
          <div class="d-flex justify-content-center mb-4">
            <div class="d-flex justify-content-center align-items-center"
              style="width: 88px; height: 88px; background: rgba(255, 255, 255, 0.19); border-radius: 20px;">
              <img src="{{ asset('assets/img/icon-webdev.png') }}" alt="">
            </div>
          </div>
          <h5>Web Development</h5>
          <p class="fw-light">Melakukan pengembangan aplikasi berbasis Website</p>
        </div>
      </div>
      <div class="col-md-4 mb-4 text-white">
        <div class="p-5 text-center "
          style="background: rgba(255, 255, 255, 0.13); border-radius: 20px; backdrop-filter: blur(5px);">
          <div class="d-flex justify-content-center mb-4">
            <div class="d-flex justify-content-center align-items-center"
              style="width: 88px; height: 88px; background: rgba(255, 255, 255, 0.19); border-radius: 20px;">
              <img src="{{ asset('assets/img/icon-ui-ux.png') }}" alt="">
            </div>
          </div>
          <h5>UI/UX Designer</h5>
          <p class="fw-light">Melakukan proses Sketching, Wireframing, Mockup, hingga Prototype</p>
        </div>
      </div>
      <div class="col-md-4 mb-4 text-white">
        <div class="p-5 text-center "
          style="background: rgba(255, 255, 255, 0.13); border-radius: 20px; backdrop-filter: blur(5px);">
          <div class="d-flex justify-content-center mb-4">
            <div class="d-flex justify-content-center align-items-center"
              style="width: 88px; height: 88px; background: rgba(255, 255, 255, 0.19); border-radius: 20px;">
              <img src="{{ asset('assets/img/icon-mobile-dev.png') }}" alt="">
            </div>
          </div>
          <h5>Mobile Development</h5>
          <p class="fw-light">Melakukan pengembangan aplikasi berbasis Mobile App</p>
        </div>
      </div>
      <div class="col-md-4 mb-4 text-white">
        <div class="p-5 text-center "
          style="background: rgba(255, 255, 255, 0.13); border-radius: 20px; backdrop-filter: blur(5px);">
          <div class="d-flex justify-content-center mb-4">
            <div class="d-flex justify-content-center align-items-center"
              style="width: 88px; height: 88px; background: rgba(255, 255, 255, 0.19); border-radius: 20px;">
              <img src="{{ asset('assets/img/icon-comp.png') }}" alt="">
            </div>
          </div>
          <h5>Comp. Programming</h5>
          <p class="fw-light">Melakukan pengembangan algoritma pemrograman untuk berkompetisi</p>
        </div>
      </div>
      <div class="col-md-4 mb-4 text-white">
        <div class="p-5 text-center "
          style="background: rgba(255, 255, 255, 0.13); border-radius: 20px; backdrop-filter: blur(5px);">
          <div class="d-flex justify-content-center mb-4">
            <div class="d-flex justify-content-center align-items-center"
              style="width: 88px; height: 88px; background: rgba(255, 255, 255, 0.19); border-radius: 20px;">
              <img src="{{ asset('assets/img/icon-ai-software.png') }}" alt="">
            </div>
          </div>
          <h5>AI Software</h5>
          <p class="fw-light">Mengembangkan perangkat lunak berbasis kecerdasan artifisial</p>
        </div>
      </div>
      <div class="col-md-4 mb-4 text-white position-relative">
        <div class="p-5 text-center"
          style="background: rgba(255, 255, 255, 0.13); border-radius: 20px; backdrop-filter: blur(5px);">
          <div class="d-flex justify-content-center mb-4">
            <div class="d-flex justify-content-center align-items-center"
              style="width: 88px; height: 88px; background: rgba(255, 255, 255, 0.19); border-radius: 20px;">
              <img src="{{ asset('assets/img/icon-data-engineering.png') }}" alt="">
            </div>
          </div>
          <h5>Data Engineering</h5>
          <p class="fw-light">Melakukan pengolahan data untuk dianalisa dan memperoleh manfaat</p>
        </div>
        <div class="Ellipse11 position-absolute"
          style="width: 400px; height: 400px; transform: rotate(250deg); transform-origin: 0 0; background: linear-gradient(216deg, #740200 0%, #01012D 100%); box-shadow: 10px 2px 50px rgba(255, 255, 255, 0.09); border-radius: 9999px; z-index: -99; margin-left: 200px; margin-top:200px;">
        </div>
      </div>
    </div>
    <div class="Ellipse9 position-absolute"
      style="width: 722px; height: 722px; transform: rotate(180deg); transform-origin: 0 0; background: linear-gradient(216deg, #740200 0%, #01012D 100%); box-shadow: 10px 2px 50px rgba(255, 255, 255, 0.09); border-radius: 9999px; z-index: -99; margin-left: 300px; margin-top: 250px;">
    </div>
    <div class="Ellipse8 position-absolute"
      style="width: 1000px; height: 1000px; background: rgba(163.69, 0, 221.20, 0.23); box-shadow: 400px 400px 400px; border-radius: 9999px; filter: blur(100px); z-index: -100; margin-right: 500px; margin-bottom: 200px;">
    </div>
  </div>
  {{-- Division - end --}}

@endsection
