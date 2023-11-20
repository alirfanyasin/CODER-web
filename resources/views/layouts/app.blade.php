<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>
  <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/main-logo.png') }}">
  {{-- BOOTSTRAP 5.3.2 CSS --}}
  {{-- <link rel="stylesheet" href="{{ url('node_modules/bootstrap/dist/css/bootstrap.min.css') }}"> --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  {{-- JQuery --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  {{-- Font --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,300;6..12,400;6..12,500;6..12,600;6..12,700;6..12,800&family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
  {{-- Slider --}}
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
  {{-- Animation --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  {{-- Typed Animation --}}
  <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
  {{-- Custom CSS --}}
  <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
  {{-- QuillJs --}}
  <link href="//cdn.quilljs.com/1.0.0/quill.snow.css" rel="stylesheet" />
  <script src="//cdn.quilljs.com/1.0.0/quill.min.js"></script>
</head>

<body>
  <main>
    <div class="row">
      <div class="col-3">
        @include('components.sidebar')
      </div>

      <div class="col-9" style="height: 100vh; overflow-y: scroll; overflow-x: hidden;">
        <div class="container">
          <nav class="py-4 d-flex justify-content-end align-items-center">
            <div class="text-white mx-4">
              <span class="fw-light">Welcome, <span class="fw-semibold">Username</span></span>
            </div>
            <div class="rounded-pill bg-dark overflow-hidden" style="width: 50px; height: 50px;">
              <img src="{{ asset('assets/img/photo-profile.jpg') }}" alt="" width="100%" height="">
            </div>
          </nav>
          {{-- Content start --}}
          @yield('content')
          {{-- Content end --}}
        </div>
      </div>
    </div>
  </main>


  <div class="Ellipse12 position-absolute" style="width: 1100px; height: 1100px; transform: rotate(74.92deg); transform-origin: 0 0; background: linear-gradient(220deg, #01012D 0%, #900505 100%); border-radius: 9999px; z-index: -99; left: 800px; top: -600px; ">
  </div>

  <div class="Ellipse13 position-absolute" style="width: 800px; height: 800px; background: rgba(0, 139.21, 148.10, 0.48); box-shadow: 500px 500px 500px; border-radius: 9999px; filter: blur(100px); z-index: -99; left: 800px; top: -600px;">
  </div>
  <div class="Ellipse17 position-absolute" style="width: 800px; height: 800px; background: rgba(0, 0, 0, 0.60);  border-radius: 9999px; filter: blur(100px); z-index: -99; left: 100px; top: -400px;">
  </div>
  <div class="Ellipse14  position-absolute" style="width: 400px; height: 400px; background: rgba(220.66, 147.69, 255, 0.60); box-shadow: 600px 600px 600px; border-radius: 9999px; filter: blur(200px); z-index: -99; left: 600px; bottom:0;">
  </div>


  {{-- BOOTSTRAP 5.3.2 JS --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  {{-- <script src="{{ url('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script> --}}
  {{-- My SCRIPT --}}
  <script src="{{ asset('assets/js/script.js') }}"></script>
  {{-- Iconify --}}
  <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
  @stack('js-libraries')
</body>

</html>