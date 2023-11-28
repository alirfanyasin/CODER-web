@extends('layouts.app')

@section('title', 'CODER - E-Learning Task')

@section('content')
  <section>
    <div class="breadcrumb d-flex justify-content-between align-items-center text-white">
      <h1>E-Learning</h1>
    </div>
  </section>

  <div class="row">
    @role('admin')
      <div class="col-md-8">
      @endrole
      @role('user')
        <div class="col-md-12">
        @endrole

        <div class="text-white p-4"
          style="background: rgba(255, 255, 255, 0.13); border-radius: 20px; backdrop-filter: blur(5px);">
          <header class="text-left">
            <h5>{{ $data_task->task_name }}</h5>
          </header>
          <hr class="border border-2">

          @foreach ($data as $user)
            <div>
              <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center mt-4">
                  <div class="overflow-hidden rounded-circle border border-1" style="width: 50px; height: 50px;">
                    <img src="{{ asset('storage/avatar/' . ($user->user->avatar ?? 'photo-profile.jpg')) }}"
                      alt="" class="w-100 h-100">
                  </div>
                  <div class="mx-3">
                    <div style="margin-bottom: -5px">{{ $user->user->name }}</div>
                    <small class="fw-light" style="font-size: 10pt;">{{ $user->user->division->name }}</small>
                  </div>
                </div>
                <div>
                  <a href="{{ $user->submission }}" target="_blank" class="text-white text-decoration-none fw-light">Lihat
                    tugas</a>
                </div>
              </div>
            </div>
          @endforeach

        </div>
      </div>

      @role('admin')
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
      @endrole
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
