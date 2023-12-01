@extends('layouts.auth')

@section('title', 'CODER - Presence Verify Success')

@section('content')
  <section>
    <div class="container" style="z-index: 100">
      <div class="row d-flex justify-content-center">
        <div class="col-md-4">

          @if (session('success'))
            <div class="card p-4 bg-custom">
              <div class="text-center text-white">
                <iconify-icon icon="ph:seal-check-bold" width="80px"></iconify-icon>
                <h2 class="text-white fw-bold">{{ session('success') }}</h2>
                <div class="text-white">Terimakasih {{ session('username') }} Telah Hadir</div>
              </div>
            </div>
          @endif
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
  </section>
  <style>
    section {
      position: relative;
      width: 100vw;
      height: 100vh;
      overflow: hidden;
      display: flex;
      justify-content: center;
      align-items: center;
    }
  </style>
@endsection
