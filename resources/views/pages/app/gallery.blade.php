@extends('layouts.app')

@section('title', 'CODER - Gallery')

@section('content')
  <section>
    <div class="breadcrumb d-flex justify-content-between align-items-center text-white">
      <h1>Gallery</h1>
      <div>
        <a href="{{ route('admin.gallery.create') }}" class="btn-main">Create Gallery</a>
      </div>
    </div>

    <div class="row">
      @foreach ($data as $img)
        <div class="col-lg-4 col-md-6 mb-3">
          <div class="position-relative">
            <a href="{{ asset('storage/gallery/' . $img->img) }}" class="p-3 d-block overflow-hidden "
              style="background: rgba(255, 255, 255, 0.13); height: 230px; width: 100%; border-radius: 10px; backdrop-filter: blur(5px);">
              <div class="overflow-hidden" style=" height: 200px; width: 100%; border-radius: 10px; ">
                <img src="{{ asset('storage/gallery/' . $img->img) }}" alt="Img" width="100%" class="rounded-3">
              </div>
            </a>
            <div class="bg-danger action p-2 "
              style="position: absolute; top: 0px; right: 0px; border-radius: 0 10px 0 10px">
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
