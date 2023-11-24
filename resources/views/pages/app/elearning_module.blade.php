@extends('layouts.app')

@section('title', 'CODER - E-Learning Modul')

@section('content')
  <section>
    <div class="breadcrumb d-flex justify-content-between align-items-center text-white">
      <h1>E-Learning</h1>
      <div>
        @if (Auth::user()->hasRole('admin') || Auth::user()->hasPermissionTo('admin-division'))
          <a href="{{ route('admin.elearning.module.create') }}" class="btn-main">Create Module</a>
        @endif
      </div>
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
            <h5>Module {{ $division->name }}</h5>
          </header>

          @foreach ($groupedData as $meeting => $data)
            <div>
              <div class="d-flex align-items-center">
                <hr class="border border-2" style="width: 40%;">
                <small class="mx-2 fw-light">Pertemuan {{ $meeting }}</small>
                <hr class="border border-2" style="width: 40%;">
              </div>

              @foreach ($data as $item)
                <div class="d-flex align-items-center justify-content-between mb-3">
                  <div class="d-flex align-items-center">
                    <iconify-icon icon="{{ $item->type }}" width="40px"></iconify-icon>
                    @if ($item->link == null)
                      <a href="{{ asset('storage/module/files/' . $item->file) }}" download
                        class="mx-3 text-white fw-light text-decoration-none">{{ $item->lesson }}
                        &nbsp; &rightarrow;
                      </a>
                    @elseif($item->file == null)
                      <a href="{{ $item->link }}" target="_blank"
                        class="mx-3 text-white fw-light text-decoration-none">{{ $item->lesson }}
                        &nbsp; &rightarrow;
                      </a>
                    @endif
                  </div>
                  <div>
                    @if (Auth::user()->hasRole('admin') || Auth::user()->hasPermissionTo('admin-division'))
                      <form action="{{ route('admin.elearning.module.destroy', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-white" style="background: none; border: none;">
                          <iconify-icon icon="mynaui:trash"></iconify-icon>
                        </button>
                      </form>
                    @endif
                  </div>
                </div>
              @endforeach
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
                    <a href="{{ url('/admin/e-learning/module/division-' . $division->id) }}"
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
