@extends('layouts.app')

@section('title', 'CODER - Create Division')

@section('content')
  <section>
    <div class="breadcrumb d-flex justify-content-between align-items-center text-white">
      <h1>Division Member</h1>
    </div>

    <div class="row">
      @foreach ($data as $user)
        <div class="col-md-3 mb-3">
          <div class="p-4 text-white text-center"
            style="background: rgba(255, 255, 255, 0.15); border-radius: 10px; backdrop-filter: blur(5px);">
            <div class="d-flex justify-content-center">
              <div class="rounded-pill bg-dark overflow-hidden" style="width: 100px; height: 100px;">
                <img src="{{ asset('storage/avatar/' . ($user->avatar ?? 'photo-profile.jpg')) }}" alt=""
                  width="100%" height="">
              </div>
            </div>
            <div class="fw-light mt-4">
              <div class="fw-bold">{{ $user->name }}</div>
              <small>{{ $user->division->name }}</small>
            </div>
            <div class="footer d-flex justify-content-center align-items-center mt-3">
              <a href="{{ route('admin.users.profile', ['uuid' => Str::random(20), 'id' => $user->id, 'name' => $user->name]) }}"
                class="border border-1 px-5 py-1 rounded-pill text-decoration-none text-center text-white fw-light">
                Profile
              </a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </section>

@endsection
