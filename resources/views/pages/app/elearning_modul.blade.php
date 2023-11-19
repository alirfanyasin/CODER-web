@extends('layouts.app')

@section('title', 'CODER - E-Learning Modul')

@section('content')
  <section>
    <div class="breadcrumb d-flex justify-content-between align-items-center text-white">
      <h1>E-Learning</h1>
      <div>
        <a href="{{ route('admin.elearning.modul.create') }}" class="btn-main">Add Modul</a>
      </div>
    </div>
  </section>

  <div class="row">
    <div class="col-md-8">
      <div class="text-white p-4"
        style="background: rgba(255, 255, 255, 0.13); border-radius: 20px; backdrop-filter: blur(5px);">
        <header class="text-left">
          <h5>Modul Web Development</h5>
        </header>
        <div>
          <div class="d-flex align-items-center">
            <hr class="border border-2" style="width: 40%;">
            <small class="mx-2 fw-light">Pertemuan 1</small>
            <hr class="border border-2" style="width: 40%;">
          </div>
          <div class="d-flex align-items-center mb-3">
            <iconify-icon icon="mdi:github" width="40px"></iconify-icon>
            <a href="https://github.com/alirfanyasin/CODER-web"
              class="mx-3 text-white fw-light text-decoration-none">Modul Belajar website &nbsp; &rightarrow;
            </a>
          </div>
          <div class="d-flex align-items-center mb-3">
            <iconify-icon icon="vscode-icons:file-type-powerpoint" width="40px"></iconify-icon>
            <a href="https://github.com/alirfanyasin/CODER-web" class="mx-3 text-white fw-light text-decoration-none">PPT
              Belajar Website &nbsp; &rightarrow;</a>
          </div>
        </div>
        <div>
          <div class="d-flex align-items-center">
            <hr class="border border-2" style="width: 40%;">
            <small class="mx-2 fw-light">Pertemuan 2</small>
            <hr class="border border-2" style="width: 40%;">
          </div>
          <div class="d-flex align-items-center mb-3">
            <iconify-icon icon="mdi:github" width="40px"></iconify-icon>
            <a href="https://github.com/alirfanyasin/CODER-web"
              class="mx-3 text-white fw-light">https://github.com/alirfanyasin/CODER-web</a>
          </div>
          <div class="d-flex align-items-center mb-3">
            <iconify-icon icon="vscode-icons:file-type-word" width="40px"></iconify-icon>
            <a href="https://github.com/alirfanyasin/CODER-web" class="mx-3 text-white fw-light">pertemuan 6.pptx</a>
          </div>
          <div class="d-flex align-items-center mb-3">
            <iconify-icon icon="vscode-icons:file-type-excel" width="40px"></iconify-icon>
            <a href="https://github.com/alirfanyasin/CODER-web" class="mx-3 text-white fw-light">pertemuan 6.pptx</a>
          </div>
          <div class="d-flex align-items-center mb-3">
            <iconify-icon icon="logos:blogger" width="40px"></iconify-icon>
            <a href="https://github.com/alirfanyasin/CODER-web" class="mx-3 text-white fw-light">pertemuan 6.pptx</a>
          </div>
        </div>
        <div>
          <div class="d-flex align-items-center">
            <hr class="border border-2" style="width: 40%;">
            <small class="mx-2 fw-light">Pertemuan 3</small>
            <hr class="border border-2" style="width: 40%;">
          </div>
          <div class="d-flex align-items-center mb-3">
            <iconify-icon icon="fxemoji:notepad" width="40px"></iconify-icon>
            <a href="https://github.com/alirfanyasin/CODER-web"
              class="mx-3 text-white fw-light text-decoration-none">Pengantar Pemrograman Mobile &nbsp; &rightarrow;</a>
          </div>
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
            <li class="mb-3"><a href="" class="text-white fw-light text-decoration-none">Web
                Development</a></li>
            <li class="mb-3"><a href="" class="text-white fw-light text-decoration-none">UI/UX
                Designer</a></li>
            <li class="mb-3"><a href="" class="text-white fw-light text-decoration-none">Mobile
                Development</a></li>
            <li class="mb-3"><a href="" class="text-white fw-light text-decoration-none">Comp.
                Programming</a></li>
            <li class="mb-3"><a href="" class="text-white fw-light text-decoration-none">AI
                Software</a></li>
            <li class="mb-3"><a href="" class="text-white fw-light text-decoration-none">Data
                Engineering</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
@endsection
