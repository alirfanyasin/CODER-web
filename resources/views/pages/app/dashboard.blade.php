@extends('layouts.app')

@section('title', 'CODER - Dashboard')

@section('content')

  @role('admin')
    <section>
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="p-3 text-center text-white bg-custom">
            <h2 class="fw-bold" style="font-size: 50pt;">{{ count($gallery) }}</h2>
            <span>Gallery</span>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="p-3 text-center text-white bg-custom">
            <h2 class="fw-bold" style="font-size: 50pt;">{{ count($users) - 1 }}</h2>
            <span>Users</span>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="p-3 text-center text-white bg-custom">
            <h2 class="fw-bold" style="font-size: 50pt;">{{ count($news) }}</h2>
            <span>News</span>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-8 mb-4">
          <div class="p-4 bg-custom">
            <h5 class="text-white">Statistik</h5>
            <div class="w-100">
              {!! $chart->container() !!}
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-5">
          <div class="p-4 bg-custom overflow-y-auto" id="meeting-schedule">
            <h5 class="text-white">Meeting Schedule</h5>
            <div class="mt-4">
              @foreach ($meetingSchedule as $schedule)
                @if ($schedule->status == 'Active')
                  <div class="text-white p-3 mb-3"
                    style="background: rgba(255, 255, 255, 0.05); border-radius: 10px; backdrop-filter: blur(5px);">
                    <div class="fw-semibold">{{ $schedule->division->name }}</div>
                    <div class="fs-1 fw-bold">{{ date('H:i', strtotime($schedule->start_time)) }}</div>
                    <div class="fw-light">{{ date('d F Y', strtotime($schedule->start_time)) }}</div>
                  </div>
                @endif
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>
  @endrole

  @role('user')
    <section>
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="p-3 text-center text-white bg-custom">
            <h2 class="fw-bold" style="font-size: 50pt;">{{ count($tasks) }}</h2>
            <span>Tasks</span>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="p-3 text-center text-white bg-custom">
            <h2 class="fw-bold" style="font-size: 50pt;">{{ count($meeting) }}</h2>
            <span>Meetings</span>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="p-3 text-center text-white bg-custom">
            <h2 class="fw-bold" style="font-size: 50pt;">0</h2>
            <span>Projects</span>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-8 mb-4">
          <div class="p-4 bg-custom">
            <h5 class="text-white">Statistik</h5>
            <div class="w-100">
              {!! $chart->container() !!}
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-5">
          <div class="p-4 bg-custom overflow-y-auto" id="meeting-schedule">
            <h5 class="text-white">Meeting Schedule</h5>
            <div class="mt-4">
              @foreach ($meetingSchedule as $schedule)
                @if ($schedule->status == 'Active')
                  <div class="text-white p-3 mb-3"
                    style="background: rgba(255, 255, 255, 0.05); border-radius: 10px; backdrop-filter: blur(5px);">
                    <div class="fw-semibold">{{ $schedule->division->name }}</div>
                    <div class="fs-1 fw-bold">{{ date('H:i', strtotime($schedule->start_time)) }}</div>
                    <div class="fw-light">{{ date('d F Y', strtotime($schedule->start_time)) }}</div>
                  </div>
                @endif
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>
  @endrole
@endsection

@push('js-libraries')
  <script src="{{ $chart->cdn() }}"></script>

  {{ $chart->script() }}
@endpush
