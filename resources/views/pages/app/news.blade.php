@extends('layouts.app')

@section('title', 'CODER - News')

@section('content')
<section>
  <div class="breadcrumb d-flex justify-content-between align-items-center text-white">
    <h1>News</h1>
    <div>
      <a href="{{ route('admin.news.create') }}" class="btn-main">Add News</a>
    </div>
  </div>
  <div class="row">
    @foreach ($data as $news)
    <div class="col-md-4 mb-3">
      <a href="{{ route('admin.news.show', $news->id) }}" class="text-decoration-none">
        <div class="p-3 text-white" style="background: rgba(255, 255, 255, 0.15); border-radius: 10px; backdrop-filter: blur(5px);">
          <img src="{{ asset('storage/image/' . $news->thumbnail) }}" alt='image' width="100%">
          <p class="text-left mt-3">{{ $news->title }} </p>
          <div class="footer d-flex justify-content-between align-items-center">
            <div>
              <small class="fw-light" style="color: rgba(255, 255, 255, 0.573);">180 Views</small>
            </div>
            <div class="fw-light" style="color: rgba(255, 255, 255, 0.573);">
              <small>{{ $news->created_at }}</small> &nbsp;
            </div>
          </div>
        </div>
      </a>
    </div>
    @endforeach
  </div>
</section>
@endsection