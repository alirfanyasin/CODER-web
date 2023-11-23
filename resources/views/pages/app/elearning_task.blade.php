<?php
use Carbon\Carbon;
?>
@extends('layouts.app')

@section('title', 'CODER - E-Learning Modul')

@section('content')
  <section>
    <div class="breadcrumb d-flex justify-content-between align-items-center text-white">
      <h1>E-Learning</h1>
      <div>
        <a href="{{ route('admin.elearning.task.create') }}" class="btn-main">Create Task</a>
      </div>
    </div>
  </section>

  <div class="row">
    <div class="col-md-8">
      <div class="text-white p-4"
        style="background: rgba(255, 255, 255, 0.13); border-radius: 20px; backdrop-filter: blur(5px);">
        <header class="text-left">
          <h5>Task {{ $division->name }}</h5>
        </header>

        @foreach ($allData as $task => $data)
          <div>
            <div class="d-flex justify-content-between align-items-center">
              <div class="d-flex align-items-center mt-4">
                <div class="overflow-hidden rounded-circle border border-1" style="width: 50px; height: 50px;">
                  <img src="{{ asset('assets/img/photo-profile.jpg') }}" alt="" class="w-100 h-100">
                </div>
                <div class="mx-3">
                  <div style="margin-bottom: -5px">{{ $data->user->name }}</div>
                  <small class="fw-light" style="font-size: 10pt;">{{ $data->user->division }}</small>
                </div>
              </div>
              <div class="text-end">
                <?php
                $dateTime = \Carbon\Carbon::parse($data->deadline); // Gantilah dengan kolom yang sesuai
                $countdown = $dateTime->diffForHumans(\Carbon\Carbon::now(), [
                    'syntax' => Carbon::DIFF_ABSOLUTE,
                    'parts' => 5, // Menampilkan hari, jam, menit, detik, dan mikrodetik
                ]);
                ?>
                <div>{{ $countdown }}</div>
                <small class="fw-light" style="font-size: 8pt;">{{ $dateTime->format('j F Y') }}</small>
              </div>
            </div>

            <div class="text-white p-4 mt-2"
              style="background: rgba(255, 255, 255, 0.13); border-radius: 10px; backdrop-filter: blur(5px);">
              <h5>{{ $data->task_name }}</h5>
              <p class="fw-light">{{ $data->description }}.</p>

              <div class="d-flex justify-content-between mt-4 align-items-center">
                @if ($data->file != null)
                  @role('admin')
                    <div>
                      <a href="" class="btn-custom">View Submission</a>
                    </div>
                  @endrole
                  @role('user')
                    <div>
                      <a href="" class="btn-custom">Add Submission</a>
                    </div>
                  @endrole
                  <a href="">
                    <iconify-icon icon="vscode-icons:file-type-pdf2" width="50px"></iconify-icon>
                  </a>
                @else
                  @role('admin')
                    <div class="d-flex justify-content-between align-items-center">
                      <a href="" class="btn-custom">View Submission</a>
                    </div>
                  @endrole
                  @role('user')
                    <div class="d-flex justify-content-between align-items-center">
                      <a href="" class="btn-custom">View Submission</a>
                    </div>
                  @endrole
                @endif
              </div>
            </div>
            <hr class="border border-2">
          </div>
        @endforeach
        <div>
          <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center mt-4">
              <div class="overflow-hidden rounded-circle border border-1" style="width: 50px; height: 50px;">
                <img src="{{ asset('assets/img/photo-profile.jpg') }}" alt="" class="w-100 h-100">
              </div>
              <div class="mx-3">
                <div style="margin-bottom: -5px">aDMIN</div>
                <small class="fw-light" style="font-size: 10pt;">Admin Web Development</small>
              </div>
            </div>
            <div class="text-end">
              <div class="text-white px-2 py-1 rounded-2 fw-light">
                <iconify-icon icon="gg:check-o" width="30px" class="text-success"></iconify-icon>
              </div>
              {{-- <div>4 Days, 10 Hour</div>
              <small class="fw-light" style="font-size: 8pt;">20 November 2023</small> --}}
            </div>
          </div>

          <div class="text-white p-4 mt-2"
            style="background: rgba(255, 255, 255, 0.13); border-radius: 10px; backdrop-filter: blur(5px);">
            <h5>Membuat CRUD Website menggunakan Laravel</h5>
            <p class="fw-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam eligendi quam molestiae
              et dolore
              obcaecati blanditiis eum ab sit harum eveniet, nesciunt, totam ipsam cumque inventore modi ex? Quas
              suscipit maxime rerum nostrum tempora aperiam quidem magnam quasi minima! Ex.</p>

            <div class="d-flex justify-content-between mt-4 align-items-center">
              <div>
                <iconify-icon icon="vscode-icons:file-type-pdf2" width="50px"></iconify-icon>
              </div>
              <div>
                <a href="" class="btn-custom">Add Submission</a>
              </div>
            </div>
          </div>
          <hr class="border border-2">
        </div>
      </div>
    </div>


    <div class="col-md-4">
      <div class="text-white p-4"
        style="background: rgba(255, 255, 255, 0.13); border-radius: 20px; backdrop-filter: blur(5px);">
        <header class="text-left">
          <h5>Division</h5>
        </header>
        <div>
          <ul class="mt-3">
            @foreach ($allDivision as $division)
              <li class="mb-3 list-division">
                <a href="{{ url('/admin/e-learning/task/division-' . $division->id) }}"
                  class="text-white fw-light text-decoration-none">{{ $division->name }}</a>
              </li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </div>

  <style>
    .list-division {
      transition: .7s;
    }

    .list-division:hover {
      background: rgba(255, 255, 255, 0.13);
      border-radius: 5px;
      padding: 2px 10px;
      backdrop-filter: blur(5px);
    }
  </style>
@endsection
