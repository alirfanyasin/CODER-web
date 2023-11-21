@extends('layouts.app')

@section('title', 'CODER - News')

<style>
  .dropdown-toggle:empty::before {
    margin-left: 0;
    display: none;

  }

  .dropdown-toggle:hover {
    cursor: pointer;
  }
</style>

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
      <div class="p-3 text-white" style="background: rgba(255, 255, 255, 0.15); border-radius: 10px; backdrop-filter: blur(5px);">
        <a href="{{ route('admin.news.show', $news->id) }}" class="text-decoration-none">
          <img src="{{ asset('storage/image/' . $news->thumbnail) }}" alt='image' width="100%">
          <p class="text-left mt-3">{{ $news->title }} </p>
        </a>
        <div class="footer d-flex justify-content-between align-items-center">
          <div>
            <small class="fw-light" style="color: rgba(255, 255, 255, 0.573);">180 Views</small>
          </div>
          <div class="fw-light" style="color: rgba(255, 255, 255, 0.573);">
            <small>{{ $news->created_at }}</small> &nbsp;
          </div>
          <div class="dropdown position-absolute drop-start" style="right: 10px;">
            <iconify-icon icon="charm:menu-kebab" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"></iconify-icon>
            <ul class="dropdown-menu" style="z-index: 999;">
              <li><a class="dropdown-item" href="{{ route('admin.news.edit', $news->id) }}"><iconify-icon icon="bx:edit"></iconify-icon>
                  Edit</a></li>
              <li>
                <form action="{{ route('admin.news.destroy', $news->id) }}" class="dropdown-item" method="POST">
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
        </div>
      </div>
    </div>
    @endforeach
  </div>
</section>
@endsection