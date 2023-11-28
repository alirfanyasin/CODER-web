@extends('layouts.app')

@section('title', 'CODER - User Profile ' . $data->name)

@section('content')
  <section>
    <div class="container">
      <div class="row">
        <div class="col p-4"
          style="background: rgba( 255, 255, 255, 0.1 );
          box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
          backdrop-filter: blur( 8.5px );
          -webkit-backdrop-filter: blur( 8.5px );
          border-radius: 10px;
          border: 1px solid rgba( 255, 255, 255, 0.18 );">

          <div class="row d-flex align-items-center">
            <div class="col-md-3">
              <div class="rounded-2 overflow-hidden" style="width: 250px; height: 250px;">
                <img src="{{ asset('storage/avatar/' . ($data->avatar ?? 'photo-profile.jpg')) }}" alt=""
                  width="100%" height="100%">
              </div>
            </div>
            <div class="col-md-3">
              <div class="text-white">
                <h5>{{ $data->name }}</h4>
                  <div>{{ $data->nim }}</div>
                  <div>{{ $data->division->name }}</div>
                  <br>
                  <div class="fw-light">
                    <div class="fw-light">{{ $data->email }}</div>
                    <div class="fw-light">{{ $data->field_of_study ?? '-' }}</div>
                    <div class="fw-light">{{ $data->batch ?? '-' }}</div>
                    <div class="fw-light">{{ $data->phone_number ?? '-' }}</div>
                  </div>
              </div>
            </div>
            <div class="col-md-2 d-flex justify-content-center">
              <div class="text-white text-center">
                <h1 class="fw-bold" style="font-size: 60pt;">{{ $totalPresence }}</h1>
                <p>Presence</p>
              </div>
            </div>
            <div class="col-md-2 d-flex justify-content-center">
              <div class="text-white text-center">
                <h1 class="fw-bold" style="font-size: 60pt;">{{ $totalPoint }}</h1>
                <p>Point</p>
              </div>
            </div>
            <div class="col-md-2 d-flex justify-content-center">
              <div class="text-white text-center">
                <h1 class="fw-bold" style="font-size: 60pt;">0</h1>
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
                  @php
                    $no = 1;
                  @endphp
                  @foreach ($dataPresence as $presence)
                    <tr>
                      <th class="align-middle" scope="row">{{ $no++ }}</th>
                      <td class="align-middle">Pertemuan {{ $presence->presence->meeting }}</td>
                      <td class="align-middle">{{ date('j F Y', strtotime($presence->presence->date)) }}</td>
                      <td class="align-middle"><span
                          class="badge {{ $presence->status == 'Hadir' ? 'bg-success' : '' }} {{ $presence->status == 'Alfa' ? 'bg-danger' : '' }} {{ $presence->status == 'Izin' ? 'bg-warning' : '' }}">{{ $presence->status }}</span>
                      </td>
                      <td>{{ $presence->point }}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>

            <div class="tab-pane fade" id="task-tab-pane" role="tabpanel" aria-labelledby="task-tab" tabindex="0">
              <table class="table rounded-4 table-striped mt-3">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Link</th>
                    <th scope="col">Task Name</th>
                    <th scope="col">Status</th>
                    <th scope="col">Point</th>
                  </tr>
                </thead>
                <tbody>
                  @php
                    $noSubmission = 1;
                  @endphp
                  @foreach ($dataSubmission as $submission)
                    <tr>
                      <th class="align-middle" scope="row">{{ $noSubmission++ }}</th>
                      <td class="align-middle"><a href="{{ $submission->submission }}" target="_blank"
                          class="text-decoration-none text-white"><iconify-icon icon="ci:link" width="50px"
                            class="icon-type"></iconify-icon></a></td>
                      <td class="align-middle">{{ $submission->task->task_name }}</td>
                      <td class="align-middle"><span class="badge bg-success">Submitted</span></td>
                      <td class="align-middle">{{ $submission->point }}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>

            <div class="tab-pane fade" id="project-tab-pane" role="tabpanel" aria-labelledby="project-tab"
              tabindex="0">
              <h2 class="text-white">Cooming Soon</h2>
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
