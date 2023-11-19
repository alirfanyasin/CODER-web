@extends('layouts.app')

@section('title', 'CODER - News')

@section('content')
<section>
  <div class="container mb-5">
    <div class="row">
      <div class="col text-white p-4" style="background: rgba(255, 255, 255, 0.15); border-radius: 10px; backdrop-filter: blur(5px);">
        <div class="mb-3">
          <a href="{{ route('admin.news.edit', $data->id) }}" class="btn-main">Edit</a>
          <a href="{{ route('admin.news.destroy', $data->id) }}" class="btn-main">Delete</a>
        </div>
        <div class="rounded-3 overflow-hidden" style="height: 500px">
          <img src="{{ asset('storage/image/' . $data->thumbnail) }}" alt="" width="100%">
        </div>
        <div class="mt-5">
          <h1>{{ $data->title }}</h1>
          <div class="d-inline-block px-4 pt-3 mt-3" style="background: rgba(255, 255, 255, 0.15); border-radius: 10px; backdrop-filter: blur(2px);">
            <p>{{ $data->created_at }}</p>
          </div>
          <div class="d-inline-block px-4 pt-3" style="background: rgba(255, 255, 255, 0.15); border-radius: 10px; backdrop-filter: blur(2px);">
            <p>{{ $data->category }}</p>
          </div>
          <p class="fw-light mt-5">{{ $data->content }}</p>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection