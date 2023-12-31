@extends('layouts.app')

@section('title', 'CODER - Gallery')

@section('content')
  <section>
    <div class="breadcrumb d-flex justify-content-between align-items-center text-white">
      <h1>Gallery</h1>
      {{-- <div>
        <a href="{{ route('admin.gallery.create') }}" class="btn-main">Create Gallery</a>
      </div> --}}
      <a href="{{ route('admin.gallery.create') }}">
        <div class="btn-circle">
          <iconify-icon icon="ph:plus-bold" class="text-white" width="20px"></iconify-icon>
        </div>
      </a>
    </div>

    <div class="row">
      @foreach ($data as $img)
        <div class="col-lg-4 col-md-6 mb-3">
          <div class="position-relative">
            <a href="{{ asset('storage/gallery/' . $img->img) }}" class="p-3 d-block overflow-hidden bg-custom">
              <div class="overflow-hidden" style=" height: 200px; width: 100%; border-radius: 10px; ">
                <img src="{{ asset('storage/gallery/' . $img->img) }}" alt="Img" width="100%" class="rounded-3">
              </div>
            </a>
            <div class="bg-danger action p-2 "
              style="position: absolute; top: 0px; right: 0px; border-radius: 0 20px 0 20px">
              <form action="{{ route('admin.gallery.destroy', $img->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" style="background: none; border: none;" class="text-white">
                  <iconify-icon icon="mi:delete"></iconify-icon>
                </button>
              </form>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </section>
@endsection
