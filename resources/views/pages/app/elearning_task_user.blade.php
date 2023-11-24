<?php
use Carbon\Carbon;
?>
@extends('layouts.app')

@section('title', 'CODER - E-Learning Modul')

@section('content')
  <section>
    <div class="breadcrumb d-flex justify-content-between align-items-center text-white">
      <h1>E-Learning</h1>
      {{-- @if (Auth::user()->hasPermissionTo('admin-division')) --}}
      @can('admin-division')
        <div>
          <a href="{{ route('admin.elearning.task.create') }}" class="btn-main">Create Task</a>
        </div>
      @endcan
      {{-- @endif --}}
    </div>
  </section>

  <div class="row">
    <div class="col-md-12">
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
                    <small class="fw-light" style="font-size: 10pt;">Admin {{ $data->user->division->name }}</small>
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
                $submissionExists = $data
                    ->submission()
                    ->where('user_id', Auth::user()->id)
                    ->exists();
                ?>
                <div>
                  @if ($submissionExists)
                    <div class="text-white px-2 py-1 rounded-2 fw-light">
                      <iconify-icon icon="gg:check-o" width="30px" class="text-success"></iconify-icon>
                    </div>
                  @else
                    <div>
                      {{ $countdown }}
                    </div>
                    <small class="fw-light" style="font-size: 8pt;">{{ $dateTime->format('j F Y') }}</small>
                  @endif
                </div>
              </div>
            </div>

            <div class="text-white p-4 mt-2"
              style="background: rgba(255, 255, 255, 0.13); border-radius: 10px; backdrop-filter: blur(5px);">
              <h5>{{ $data->task_name }}</h5>
              <p class="fw-light">{{ $data->description }}.</p>

              <div class="d-flex justify-content-between mt-4 align-items-center">
                @if ($data->file != null)
                  @role('user')
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="d-flex align-items-center ">
                        @if (!$submissionExists)
                          <button type="button" class="btn-custom border-0" data-bs-toggle="modal"
                            data-bs-target="#add_submission{{ $data->id }}">Add
                            Submission</button>
                        @endif
                        @if ($submissionExists)
                          <button
                            type="button"class="btn-action-custom mx-2 d-flex justify-content-center align-items-center border-0"
                            data-bs-toggle="modal" data-bs-target="#edit_submission{{ $data->id }}"><iconify-icon
                              icon="basil:edit-outline"></iconify-icon></button>
                        @endif
                      </div>
                    </div>
                  @endrole
                  <a href="{{ asset('storage/task/' . $data->file) }}" target="_blank">
                    <iconify-icon icon="vscode-icons:file-type-pdf2" width="50px"></iconify-icon>
                  </a>
                @else
                  @role('user')
                    <div class="d-flex  align-items-center">
                      @if (!$submissionExists)
                        <button type="button" class="btn-custom border-0" data-bs-toggle="modal"
                          data-bs-target="#add_submission{{ $data->id }}">Add
                          Submission</button>
                      @endif
                      @if ($submissionExists)
                        <button
                          type="button"class="btn-action-custom mx-2 d-flex justify-content-center align-items-center border-0"
                          data-bs-toggle="modal" data-bs-target="#edit_submission{{ $data->id }}"><iconify-icon
                            icon="basil:edit-outline"></iconify-icon></button>
                      @endif
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
  </div>


  <!-- Modal -->
  @foreach ($allData as $item)
    <div class="modal fade" id="add_submission{{ $item->id }}" tabindex="-1" aria-labelledby="add_submission"
      aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="">Add Submission</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="{{ route('user.elearning.task.submission', $division->id) }}" method="POST">
            @csrf
            <div class="modal-body">
              <input type="hidden" name="task_id" value="{{ $item->id }}">
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

    @if ($item->submission()->where('user_id', Auth::user()->id)->exists())
      <div class="modal fade" id="edit_submission{{ $item->id }}" tabindex="-1" aria-labelledby="edit_submission"
        aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="">Edit Submission</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            @foreach ($submission_data as $submis)
              @if ($submis->task_id == $item->id && Auth::user()->id == $submis->user_id)
                <form
                  action="{{ route('user.elearning.task.submission.update', ['subm_id' => $submis->id, 'divi_id' => $division->id]) }}"
                  method="POST">
                  @csrf
                  <div class="modal-body">
                    <input type="hidden" name="task_id" value="{{ $item->id }}">
                    <div class="mb-3">

                      <input type="url" name="submission" class="form-control" value="{{ $submis->submission }}"
                        placeholder="Masukkan link project">

                      @error('submission')
                        <small class="text-danger">{{ $message }}</small>
                      @enderror
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-danger">Save changes</button>
                  </div>
                </form>
              @endif
            @endforeach
          </div>
        </div>
      </div>
    @endif
  @endforeach

@endsection
