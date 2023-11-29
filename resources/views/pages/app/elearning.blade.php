@extends('layouts.app')

@section('title', 'CODER - E-Learning')

@section('content')
  <section>
    <div class="breadcrumb d-flex justify-content-between align-items-center text-white">
      <h1>E-Learning</h1>
    </div>
  </section>

  <div class="row">
    @role('admin')
      <div class="col-md-4 mb-3">
        <a href="/admin/e-learning/module/division-1" class="text-decoration-none">
          <div class="text-white p-4 text-center bg-custom">
            <div class="text-white">
              <iconify-icon icon="mdi:book-open-page-variant-outline" width="150px"></iconify-icon>
              <h2>Module</h2>
              <p class="fw-light">Membuat dan membagikan modul pembelajaran</p>
            </div>
          </div>
        </a>
      </div>

      <div class="col-md-4 mb-3">
        <a href="/admin/e-learning/task/division-1" class="text-decoration-none">
          <div class="text-white p-4 text-center bg-custom">
            <div class="text-white">
              <iconify-icon icon="jam:task-list" width="150px"></iconify-icon>
              <h2>Task</h2>
              <p class="fw-light">Membuat tempat untuk pengumpulan tugas</p>
            </div>
          </div>
        </a>
      </div>

      <div class="col-md-4 mb-3">
        <a href="/admin/e-learning/meet/division-1" class="text-decoration-none">
          <div class="text-white p-4 text-center bg-custom">
            <div class="text-white">
              <iconify-icon icon="fluent:meet-now-24-regular" width="150px"></iconify-icon>
              <h2>Meeting</h2>
              <p class="fw-light">Membuat dan membagikan link jadwal pertemuan</p>
            </div>
          </div>
        </a>
      </div>
    @endrole

    @role('user')
      <div class="col-md-4 mb-3">
        <a href="/e-learning/module/division-{{ Auth::user()->division_id }}" class="text-decoration-none">
          <div class="text-white p-4 text-center bg-custom">
            <div class="text-white">
              <iconify-icon icon="mdi:book-open-page-variant-outline" width="150px"></iconify-icon>
              <h2>Module</h2>
              <p class="fw-light">Membaca dan menyimpan modul pembelajaran</p>
            </div>
          </div>
        </a>
      </div>

      <div class="col-md-4 mb-3">
        <a href="/e-learning/task/division-{{ Auth::user()->division_id }}" class="text-decoration-none">
          <div class="text-white p-4 text-center bg-custom">
            <div class="text-white">
              <iconify-icon icon="jam:task-list" width="150px"></iconify-icon>
              <h2>Task</h2>
              <p class="fw-light">Kumpulan dan pengumpulan tugas hasil belajar</p>
            </div>
          </div>
        </a>
      </div>

      <div class="col-md-4 mb-3">
        <a href="" class="text-decoration-none">
          <div class="text-white p-4 text-center bg-custom">
            <div class="text-white">
              <iconify-icon icon="fluent:meet-now-24-regular" width="150px"></iconify-icon>
              <h2>Meeting</h2>
              <p class="fw-light">Jadwal pertemuan dan link meeting online </p>
            </div>
          </div>
        </a>
      </div>
    @endrole

  </div>
@endsection
