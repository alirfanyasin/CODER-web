@extends('layouts.app')

@section('title', 'CODER - Dashboard')

@section('content')
  <section>
    <div class="row">
      <div class="col-md-4 mb-4">
        <div class="p-3 text-center text-white"
          style="background: rgba(255, 255, 255, 0.15); border-radius: 10px; backdrop-filter: blur(5px);">
          <h2 class="fw-bold" style="font-size: 50pt;">23</h2>
          <span>Gallery</span>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="p-3 text-center text-white"
          style="background: rgba(255, 255, 255, 0.15); border-radius: 10px; backdrop-filter: blur(5px);">
          <h2 class="fw-bold" style="font-size: 50pt;">152</h2>
          <span>User</span>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="p-3 text-center text-white"
          style="background: rgba(255, 255, 255, 0.15); border-radius: 10px; backdrop-filter: blur(5px);">
          <h2 class="fw-bold" style="font-size: 50pt;">72</h2>
          <span>News</span>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-8">
        <div class="p-4"
          style="background: rgba(255, 255, 255, 0.15); border-radius: 10px; backdrop-filter: blur(5px);">
          <h5 class="text-white">Statistik</h5>
        </div>
      </div>

      <div class="col-md-4">
        <div class="p-4"
          style="background: rgba(255, 255, 255, 0.15); border-radius: 10px; backdrop-filter: blur(5px);">
          <h5 class="text-white">Meeting Schedule</h5>

          <div class="mt-4">
            <div class="text-white p-3 mb-3"
              style="background: rgba(255, 255, 255, 0.05); border-radius: 10px; backdrop-filter: blur(5px);">
              <div class="fw-semibold">Web Development</div>
              <div class="fs-1 fw-bold">13:00</div>
              <div class="fw-light">13 November 2023</div>
            </div>
            <div class="text-white p-3 mb-3"
              style="background: rgba(255, 255, 255, 0.05); border-radius: 10px; backdrop-filter: blur(5px);">
              <div class="fw-semibold">Mobile Development</div>
              <div class="fs-1 fw-bold">15:30</div>
              <div class="fw-light">13 November 2023</div>
            </div>
            <div class="text-white p-3 mb-3"
              style="background: rgba(255, 255, 255, 0.05); border-radius: 10px; backdrop-filter: blur(5px);">
              <div class="fw-semibold">Comp. Programming</div>
              <div class="fs-1 fw-bold">07:00</div>
              <div class="fw-light">14 November 2023</div>
            </div>
            <div class="text-white p-3 mb-3"
              style="background: rgba(255, 255, 255, 0.05); border-radius: 10px; backdrop-filter: blur(5px);">
              <div class="fw-semibold">Web Development</div>
              <div class="fs-1 fw-bold">13:00</div>
              <div class="fw-light">13 November 2023</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
