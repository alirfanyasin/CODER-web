@extends('layouts.template')
@section('title', 'CODER - Creativity on Digital Environment in Room of Technology')

@section('content')
  {{-- Hero - start --}}
  <div class="container mt-5" id="hero-section">
    <div class="row d-flex justify-content-between align-items-center">
      <div class="col-lg-6 col-md-12 text-white">
        <div class="position-relative">
          <h1 class="fw-bold">Creativity on Digital Environment in
            Room of Technology</h1>
          <p class="fw-light">CODER merupakan Unit Kegiatan Mahasiswa (UKM) dari Institut Teknologi Telkom Surabaya.
            Kami
            berfokus pada
            teknologi pengembangan software</p>
          <div class="mt-5 btn-group">
            <a href="" class="btn-main">Join Us</a>
            <a href="" class="btn-second mx-3">See More</a>
          </div>
        </div>
        <div class="Ellipse5 position-absolute"
          style="width: 660px; height: 660px; background: linear-gradient(216deg, #740200 0%, #01012D 100%); box-shadow: 10px 2px 50px rgba(255, 255, 255, 0.09); border-radius: 9999px; margin-left: -450px; margin-top: -100px; z-index: -99;">
        </div>
      </div>
      <div class="col-lg-6 col-md-12 position-relative">
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
      <div class="col-lg-6 col-md-12">
        <img src="{{ asset('assets/img/illustration-2.png') }}" alt="" class="w-100">
      </div>
      <div class="col-lg-6 col-md-12 position-relative">
        <div class="Ellipse4 position-absolute"
          style="width: 340px; height: 340px; background: linear-gradient(216deg, #740200 0%, #01012D 100%); box-shadow: 10px 2px 50px rgba(255, 255, 255, 0.09); border-radius: 9999px; z-index: -999; margin-left: 450px; margin-top: -150px;">
        </div>
        <div class="w-full"
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
      <div class="col-lg-4 col-md-6 mb-4 text-white">
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
      <div class="col-lg-4 col-md-6 mb-4 text-white">
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
      <div class="col-lg-4 col-md-6 mb-4 text-white">
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
      <div class="col-lg-4 col-md-6 mb-4 text-white">
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
      <div class="col-lg-4 col-md-6 mb-4 text-white">
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
      <div class="col-lg-4 col-md-6 mb-4 text-white position-relative">
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


  {{-- Gallery - start --}}
  <div class="container" id="gallery-section">
    <header class="row text-center position-relative mb-5">
      <h2 class="fw-semibold text-white">Gallery</h2>
      <div class="d-flex justify-content-center position-absolute mt-5">
        <img src="{{ asset('assets/img/gallery.png') }}" alt="" style="z-index: -99;">
      </div>
    </header>


    <div class="row autoplay">
      <div class="col-lg-4 col-md-6">
        <div class="card mx-3 p-4"
          style="background: rgba(255, 255, 255, 0.13); border-radius: 20px; backdrop-filter: blur(5px);">
          <img src="{{ asset('assets/img/img-1.png') }}" class="card-img-top" alt="...">
          <div class="text-white pt-4">
            <h5 class="">Card title</h5>
            <p class="fw-light">Some quick example text to build on the card title and make up the bulk of the
              card's
              content.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="card mx-3 p-4"
          style="background: rgba(255, 255, 255, 0.13); border-radius: 20px; backdrop-filter: blur(5px);">
          <img src="{{ asset('assets/img/img-1.png') }}" class="card-img-top" alt="...">
          <div class="text-white pt-4">
            <h5 class="">Card title</h5>
            <p class="fw-light">Some quick example text to build on the card title and make up the bulk of the
              card's
              content.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="card mx-3 p-4"
          style="background: rgba(255, 255, 255, 0.13); border-radius: 20px; backdrop-filter: blur(5px);">
          <img src="{{ asset('assets/img/img-1.png') }}" class="card-img-top" alt="...">
          <div class="text-white pt-4">
            <h5 class="">Card title</h5>
            <p class="fw-light">Some quick example text to build on the card title and make up the bulk of the
              card's
              content.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="card mx-3 p-4"
          style="background: rgba(255, 255, 255, 0.13); border-radius: 20px; backdrop-filter: blur(5px);">
          <img src="{{ asset('assets/img/img-1.png') }}" class="card-img-top" alt="...">
          <div class="text-white pt-4">
            <h5 class="">Card title</h5>
            <p class="fw-light">Some quick example text to build on the card title and make up the bulk of the
              card's
              content.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col text-center">
        <a href="" class="btn-main">See More</a>
      </div>
    </div>
  </div>
  {{-- Gallery - end --}}



  {{-- News - start --}}
  <div class="container" id="news-section">
    <header class="row text-center position-relative mb-5">
      <h2 class="fw-semibold text-white">News</h2>
      <div class="d-flex justify-content-center position-absolute mt-5">
        <img src="{{ asset('assets/img/news.png') }}" alt="" style="z-index: -99;">
      </div>
    </header>

    <div class="row news-content">
      <div class="col-md-6">
        <div class="card p-4"
          style="background: rgba(255, 255, 255, 0.13); border-radius: 20px; backdrop-filter: blur(5px);">
          <div class="text-white">
            <img src="{{ asset('assets/img/img-1.png') }}" class="w-100" alt="...">
            <h5 class="mt-5">Play Box Let’s Play Out Of The Box</h5>
            <p class="fw-light">Playbox “let’s Play out of the box” seperti itulah jargon yang menjadi
              identitas dari
              kegiatan Playbox yang memiliki makna berfikir secara kreatif. Playbox sendiri merupakan salah satu wadah
              berkreasi untuk menghasilkan karya inovatif terbaik melalui pelatihan intensif oleh para mentor
              berpengalaman di lingkungan yang kompetitif…</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 mt-3">
        <div class="container">
          <div class="row">
            <div class="card mb-3"
              style="background: rgba(255, 255, 255, 0.13); border-radius: 20px; backdrop-filter: blur(5px);">
              <div class="row g-0 d-flex align-items-center">
                <div class="col-4">
                  <img src="{{ asset('assets/img/img-1.png') }}" class="img-fluid rounded-xl" alt="...">
                </div>
                <div class="col-8">
                  <div class="card-body text-white">
                    <h5 class="">Card title</h5>
                    <p class="fw-light">This is a wider card with supporting text below as ra natural lead-in to
                      additional
                      content..</p>
                    <p class="fw-lights"><small class="text-body-white">Last updated 3 mins ago</small></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="card mb-3"
              style="background: rgba(255, 255, 255, 0.13); border-radius: 20px; backdrop-filter: blur(5px);">
              <div class="row g-0 d-flex align-items-center">
                <div class="col-4">
                  <img src="{{ asset('assets/img/img-2.png') }}" class="img-fluid rounded-xl" alt="...">
                </div>
                <div class="col-8">
                  <div class="card-body text-white">
                    <h5 class="">Card title</h5>
                    <p class="fw-light">This is a wider card with supporting text below as ra natural lead-in to
                      additional
                      content..</p>
                    <p class="fw-lights"><small class="text-body-white">Last updated 3 mins ago</small></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="card mb-3"
              style="background: rgba(255, 255, 255, 0.13); border-radius: 20px; backdrop-filter: blur(5px);">
              <div class="row g-0 d-flex align-items-center">
                <div class="col-4">
                  <img src="{{ asset('assets/img/img-3.png') }}" class="img-fluid rounded-xl" alt="...">
                </div>
                <div class="col-8">
                  <div class="card-body text-white">
                    <h5 class="">Card title</h5>
                    <p class="fw-light">This is a wider card with supporting text below as ra natural lead-in to
                      additional
                      content..</p>
                    <p class="fw-lights"><small class="text-body-white">Last updated 3 mins ago</small></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row mt-3" style="margin-left: -25px; ">
            <div class="col">
              <a href="" class="btn-main">See More</a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  {{-- News - end --}}




  {{-- Partner - start --}}
  <div class="container" id="partner-section">
    <header class="row text-center position-relative mb-5">
      <h2 class="fw-semibold text-white">Partner</h2>
      {{-- <div class="d-flex justify-content-center position-absolute mt-5">
        <img src="{{ asset('assets/img/partner.png') }}" alt="" style="z-index: -99;">
      </div> --}}
    </header>
    <div class="row d-flex align-items-center justify-content-center">
      <div class="col-lg-2 col-md-4 col-6">
        <img src="{{ asset('assets/img/logo-dojo.png') }}" alt="" class="w-100">
      </div>
      <div class="col-lg-2 col-md-4 col-6">
        <img src="{{ asset('assets/img/logo-playbox.png') }}" alt="" class="w-100">
      </div>
      <div class="col-lg-2 col-md-4 col-6">
        <img src="{{ asset('assets/img/logo-waow.png') }}" alt="" class="w-100">
      </div>
      <div class="col-lg-2 col-md-4 col-6">
        <img src="{{ asset('assets/img/logo-wezaa.png') }}" alt="" class="w-100">
      </div>
    </div>
  </div>
  {{-- Partner - end --}}


  <footer class="py-5">
    <div class="container">
      <div class="row d-flex justify-content-between">
        <div class="col-md-3">
          <img src="{{ asset('assets/img/second-logo.png') }}" alt="" style="width: 70%;">
        </div>
        <div class="col-md-3 text-white">
          <h5>Address</h5>
          <p class="fw-light mt-4">Kampus ITTelkom Surabaya
            Jl. Ketintang No.156, Ketintang
            Kota Surabaya, Jawa Timur 60231</p>
        </div>
        <div class="col-md-3">
          <h5 class="text-white">Useful Links</h5>
          <div class="fw-light mt-4">
            <a href="" class="text-decoration-none d-block text-white">Telkom Indonesia</a>
            <a href="" class="text-decoration-none d-block text-white">Yayasan Pendidikan Telkom</a>
            <a href="" class="text-decoration-none d-block text-white">IT Telkom Surabaya</a>
          </div>
        </div>
        <div class="col-md-3">
          <h5 class="text-white">Get in Touch</h5>
          <div class="fw-light mt-4">
            <a href="" class="text-decoration-none d-block text-white">ukmcoder@ittelkom-sby.ac.id</a>
            <a href="" class="text-decoration-none d-block text-white">+ 62 838 7753 4525</a>
          </div>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col text-center">
          <small class="fw-light text-white">Copyright © 2022 CODER ITTelkom Surabaya. | Build with ❤️ by CODER
            team.</small>
        </div>
      </div>
    </div>
  </footer>

@endsection

@push('js-libraries')
  <script>
    $(document).ready(function() {
      $('.autoplay').slick({
        centerMode: true,
        centerPadding: '60px',
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1000,
        responsive: [{
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 900,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          },
        ]
      })
    })
  </script>
@endpush
