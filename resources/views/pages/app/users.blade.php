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
            @role('admin')
              @if ($user->id != 1)
                <div class="dropdown position-absolute dropstart" style="right: 20px;">
                  <iconify-icon icon="charm:menu-kebab" class="icon-toggle dropdown-toggle" data-bs-toggle="dropdown"
                    aria-expanded="false"></iconify-icon>
                  <ul class="dropdown-menu" style="z-index: 999;">
                    @if ($user->hasPermissionTo('admin-division'))
                      <li>
                        <form action="{{ route('admin.users.revoke_permission', $user->id) }}" class="dropdown-item"
                          method="POST">
                          @csrf
                          <button type="submit" class="bg-transparent border-0">
                            <iconify-icon icon="mingcute:user-security-line"></iconify-icon>
                            Remove Permission
                          </button>
                        </form>
                      </li>
                    @else
                      <li>
                        <form action="{{ route('admin.users.give_permission', $user->id) }}" class="dropdown-item"
                          method="POST">
                          @csrf
                          <button type="submit" class="bg-transparent border-0">
                            <iconify-icon icon="mingcute:user-security-line"></iconify-icon>
                            Give Permission
                          </button>
                        </form>
                      </li>
                    @endif
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
              @endif
            @endrole
            <div class="d-flex justify-content-center">
              <div class="rounded-pill bg-dark overflow-hidden" style="width: 100px; height: 100px;">
                <img src="{{ asset('storage/avatar/' . ($user->avatar ?? 'photo-profile.jpg')) }}" alt=""
                  width="100%" height="">
              </div>
            </div>
            <div class="fw-light mt-4">
              <div class="fw-bold">{{ $user->name }}</div>

              @if ($user->hasPermissionTo('admin-division'))
                <small>Admin {{ $user->division->name }}</small>
              @else
                @if ($user->hasRole('admin'))
                  <small>Administrator</small>
                @endif
                @if ($user->hasRole('user'))
                  <small>{{ $user->division->name }}</small>
                @endif
              @endif
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
