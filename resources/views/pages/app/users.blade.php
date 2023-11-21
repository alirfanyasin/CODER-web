@extends('layouts.app')

@section('title', 'CODER - Users')

@section('content')
  <section>
    <div class="breadcrumb d-flex justify-content-between align-items-center text-white">
      <h1>Users</h1>
    </div>

    <div class="row">
      @foreach ($data as $user)
        <div class="col-md-3 mb-3">
          <div class="p-4 text-white text-center position-relative"
            style="background: rgba(255, 255, 255, 0.15); border-radius: 10px; backdrop-filter: blur(5px);">
            <div class="dropdown position-absolute dropstart" style="right: 20px;">
              <iconify-icon icon="charm:menu-kebab" class="icon-toggle dropdown-toggle" data-bs-toggle="dropdown"
                aria-expanded="false"></iconify-icon>
              <ul class="dropdown-menu" style="z-index: 999;">
                <li><a class="dropdown-item" href=""><iconify-icon
                      icon="mingcute:user-security-line"></iconify-icon>
                    Give Permission</a></li>
                <li>
                  <form action="" class="dropdown-item" method="POST">
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
            <div class="d-flex justify-content-center">
              <div class="rounded-pill bg-dark overflow-hidden" style="width: 100px; height: 100px;">
                <img src="{{ asset('assets/img/photo-profile.jpg') }}" alt="" width="100%" height="">
              </div>
            </div>
            <div class="fw-light mt-4">
              <div class="fw-bold">{{ $user->name }}</div>
              <small>{{ $user->division }}</small>
            </div>
            <div class="footer d-flex justify-content-center align-items-center mt-3">
              <a href="{{ route('admin.users.profile') }}"
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
