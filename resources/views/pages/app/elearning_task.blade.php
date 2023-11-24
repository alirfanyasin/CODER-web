<?php
use Carbon\Carbon;
?>
@extends('layouts.app')

@section('title', 'CODER - E-Learning Modul')

@section('content')
  <section>
    <div class="breadcrumb d-flex justify-content-between align-items-center text-white">
      <h1>E-Learning</h1>
      @role('admin')
        <div>
          <a href="{{ route('admin.elearning.task.create') }}" class="btn-main">Create Task</a>
        </div>
      @endrole
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
                    @if ($data->user->hasRole('admin'))
                      <small class="fw-light" style="font-size: 10pt;">Administrator</small>
                    @endif
                    @if ($data->user->hasRole('user'))
                      <small class="fw-light" style="font-size: 10pt;">{{ $data->user->division->name }}</small>
                    @endif
                  </div>
                </div>
                <div class="text-end">
                  <?php
                  $dateTime = \Carbon\Carbon::parse($data->deadline);
                  $countdown = $dateTime->diffForHumans(\Carbon\Carbon::now(), [
                      'syntax' => Carbon::DIFF_ABSOLUTE,
                      'parts' => 5,
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
                      <div class="d-flex align-items-center">
                        <a href="" class="btn-custom">View Submission</a>
                        <form action="{{ route('admin.elearning.task.destroy', $data->id) }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button type="submit"
                            class="btn-action-custom d-flex justify-content-center align-items-center mx-2"><iconify-icon
                              icon="mynaui:trash"></iconify-icon></button>
                        </form>
                        <a href="{{ route('admin.elearning.task.edit', $data->id) }}"
                          class="btn-action-custom d-flex justify-content-center align-items-center"><iconify-icon
                            icon="basil:edit-outline"></iconify-icon></a>
                      </div>
                    @endrole
                    @role('user')
                      <div class="d-flex justify-content-between align-items-center">
                        <button type="button" class="btn-custom border-0" data-bs-toggle="modal"
                          data-bs-target="#add_submission{{ $data->id }}">Add
                          Submission</button>
                      </div>
                    @endrole
                    <a href="{{ asset('storage/task/' . $data->file) }}" target="_blank">
                      <iconify-icon icon="vscode-icons:file-type-pdf2" width="50px"></iconify-icon>
                    </a>
                  @else
                    @role('admin')
                      <div class="d-flex justify-content-between align-items-center">
                        <a href="" class="btn-custom">View Submission</a>
                        <form action="{{ route('admin.elearning.task.destroy', $data->id) }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button type="submit"
                            class="btn-action-custom d-flex justify-content-center align-items-center mx-2"><iconify-icon
                              icon="mynaui:trash"></iconify-icon></button>
                        </form>
                        <a href="{{ route('admin.elearning.task.edit', $data->id) }}"
                          class="btn-action-custom d-flex justify-content-center align-items-center"><iconify-icon
                            icon="basil:edit-outline"></iconify-icon></a>
                      </div>
                    @endrole
                    @role('user')
                      <div class="d-flex justify-content-between align-items-center">
                        <button type="button" class="btn-custom border-0" data-bs-toggle="modal"
                          data-bs-target="#add_submission{{ $data->id }}">Add
                          Submission</button>
                      </div>
                    @endrole
                  @endif
                </div>
              </div>
              <hr class="border border-2">
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



    <!-- Modal -->
    @foreach ($allData as $task => $data)
      <div class="modal fade" id="add_submission{{ $data->id }}" tabindex="-1" aria-labelledby="add_submission"
        aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Add Submission</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('user.elearning.task.submission', $division->id) }}" method="POST">
              @csrf
              <div class="modal-body">
                <input type="hidden" name="task_id" value="{{ $data->id }}">
                <div class="mb-3">
                  <input type="url" name="submission" class="form-control" placeholder="Masukkan link project">
                  @error('submission')
                    <small class="text-danger">{{ $message }}</small>
                  @enderror
                </div>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-danger">Save changes</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    @endforeach




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

    {{-- <div class="text-white px-2 py-1 rounded-2 fw-light">
  <iconify-icon icon="gg:check-o" width="30px" class="text-success"></iconify-icon>
</div> --}}
  @endsection
