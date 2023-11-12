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
      <div class="row mt-3">
        <div class="col">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active text-white" id="absence-tab" data-bs-toggle="tab"
                data-bs-target="#absence-tab-pane" type="button" role="tab" aria-controls="home-tab-pane"
                aria-selected="true"
                style="background: rgba(255, 255, 255, 0.13); border-radius: 10px 10px 0 0; backdrop-filter: blur(5px);">Absence</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link text-white" id="project-tab" data-bs-toggle="tab" data-bs-target="#project-tab-pane"
                type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false"
                style="background: rgba(255, 255, 255, 0.13); border-radius: 10px 10px 0 0; backdrop-filter: blur(5px);">Profile</button>
            </li>

          </ul>

          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="absence-tab-pane" role="tabpanel" aria-labelledby="absence-tab"
              tabindex="0">
              <h1 class="text-white">Ini adaalah absence</h1>
            </div>
            <div class="tab-pane fade" id="project-tab-pane" role="tabpanel" aria-labelledby="project-tab" tabindex="0">
              <h2 class="text-white">Ini adalah project</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
