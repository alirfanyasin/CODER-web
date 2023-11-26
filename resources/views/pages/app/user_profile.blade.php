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
                <div>1203220082</div>
                <div>Web Developer</div>
                <br>
                <div class="fw-light">
                  <div class="fw-light">irfanyasin@gmail.com</div>
                  <div class="fw-light">Informatika</div>
                  <div class="fw-light">2022</div>
                  <div class="fw-light">087859967039</div>
                </div>
              </div>
            </div>
            <div class="col-md-2 d-flex justify-content-center">
              <div class="text-white text-center">
                <h1 class="fw-bold" style="font-size: 60pt;">13</h1>
                <p>Presence</p>
              </div>
            </div>
            <div class="col-md-2 d-flex justify-content-center">
              <div class="text-white text-center">
                <h1 class="fw-bold" style="font-size: 60pt;">28</h1>
                <p>Point</p>
              </div>
            </div>
            <div class="col-md-2 d-flex justify-content-center">
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
              <button class="nav-link active text-white" id="presence-tab" data-bs-toggle="tab"
                data-bs-target="#presence-tab-pane" type="button" role="tab" aria-controls="home-tab-pane"
                aria-selected="true"
                style="background: rgba(255, 255, 255, 0.13); border-radius: 5px 5px 0 0; backdrop-filter: blur(5px);">Presence</button>
            </li>
            <li class="nav-item mx-1" role="presentation">
              <button class="nav-link text-white" id="task-tab" data-bs-toggle="tab" data-bs-target="#task-tab-pane"
                type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false"
                style="background: rgba(255, 255, 255, 0.13); border-radius: 5px 5px 0 0; backdrop-filter: blur(5px);">Task</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link text-white" id="project-tab" data-bs-toggle="tab" data-bs-target="#project-tab-pane"
                type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false"
                style="background: rgba(255, 255, 255, 0.13); border-radius: 5px 5px 0 0; backdrop-filter: blur(5px);">Project</button>
            </li>

          </ul>

          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="presence-tab-pane" role="tabpanel" aria-labelledby="presence-tab"
              tabindex="0">
              <table class="table rounded-4 table-striped mt-3">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Meeting</th>
                    <th scope="col">Date</th>
                    <th scope="col">Status</th>
                    <th scope="col">Point</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th class="align-middle" scope="row">1</th>
                    <td class="align-middle">Pertemuan 1</td>
                    <td class="align-middle">27 November 2023</td>
                    <td class="align-middle"><span class="badge bg-danger">Tidak Hadir</span></td>
                    <td>0</td>
                  </tr>
                  <tr>
                    <th class="align-middle" scope="row">1</th>
                    <td class="align-middle">Pertemuan 1</td>
                    <td class="align-middle">27 November 2023</td>
                    <td class="align-middle"><span class="badge bg-success">Hadir</span></td>
                    <td>5</td>
                  </tr>
                </tbody>
              </table>
            </div>

            <div class="tab-pane fade" id="task-tab-pane" role="tabpanel" aria-labelledby="task-tab" tabindex="0">
              <table class="table rounded-4 table-striped mt-3">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">File</th>
                    <th scope="col">Task Name</th>
                    <th scope="col">Status</th>
                    <th scope="col">Point</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th class="align-middle" scope="row">1</th>
                    <td class="align-middle"><iconify-icon icon="vscode-icons:file-type-pdf2" width="50px"
                        class="icon-type"></iconify-icon></td>
                    <td class="align-middle">Membuat CRUD menggunakan bahasa php</td>
                    <td class="align-middle"><span class="badge bg-danger">Not Submitted</span></td>
                    <td class="align-middle">0</td>
                  </tr>
                  <tr>
                    <th class="align-middle" scope="row">1</th>
                    <td class="align-middle"><iconify-icon icon="vscode-icons:file-type-pdf2" width="50px"
                        class="icon-type"></iconify-icon></td>
                    <td class="align-middle">Membuat Todolist menggunakan JavaScript</td>
                    <td class="align-middle"><span class="badge bg-success">Submitted</span></td>
                    <td class="align-middle">5</td>
                  </tr>
                </tbody>
              </table>
            </div>

            <div class="tab-pane fade" id="project-tab-pane" role="tabpanel" aria-labelledby="project-tab"
              tabindex="0">
              <h2 class="text-white">Ini adalah Project</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


@endsection

@push('css-custom')
  <style>
    table.table {
      --bs-table-bg: none;
      --bs-table-color: white;
      --bs-table-striped-color: white;
    }
  </style>
@endpush
