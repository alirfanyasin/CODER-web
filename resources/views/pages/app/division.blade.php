@extends('layouts.app')

@section('title', 'CODER - Division')


@section('content')

  <section>
    <div class="breadcrumb d-flex justify-content-between align-items-center text-white">
      <h1>Division</h1>
      <div>
        <a href="{{ route('admin.division.create') }}" class="btn-main">Create Division</a>
      </div>
    </div>
    <div class="row">
      @foreach ($data as $item)
        <div class="col-lg-4 col-md-6 mb-4 text-white position-relative">
          <div class="px-2 py-4 text-center "
            style="background: rgba(255, 255, 255, 0.13); border-radius: 20px; backdrop-filter: blur(5px);">
            <div class="dropdown position-absolute dropstart" style="right: 20px;">
              <iconify-icon icon="charm:menu-kebab" class="icon-toggle dropdown-toggle" data-bs-toggle="dropdown"
                aria-expanded="false"></iconify-icon>
              <ul class="dropdown-menu" style="z-index: 999;">
                <li><a class="dropdown-item" href="{{ route('admin.division.edit', $item->id) }}"><iconify-icon
                      icon="bx:edit"></iconify-icon>
                    Edit</a></li>
                <li>
                  <form action="{{ route('admin.division.destroy', $item->id) }}" class="dropdown-item" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-transparent border-0">
                      <iconify-icon icon="mi:delete"></iconify-icon>
                      Delete
                    </button>
                  </form>
                </li>
              </ul>
            </div>
            <div class="d-flex justify-content-center mb-4">
              <div class="d-flex justify-content-center align-items-center"
                style="width: 88px; height: 88px; background: rgba(255, 255, 255, 0.19); border-radius: 20px;">
                <div>
                  <iconify-icon icon="{{ $item->icon }}" width="50px"></iconify-icon>
                </div>
              </div>
            </div>
            <h5>{{ $item->name }}</h5>
            <p class="fw-light">{{ $item->description }}</p>
            <div class="mt-4">
              <a href="{{ route('admin.division.member') }}"
                class="text-decoration-none text-white fw-light px-4 py-2 border-1 border-white border rounded-pill">View
                More</a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </section>

@endsection
