@extends('layouts.template')
@section('title', 'CODER - IT Telkom Surabaya')

@section('content')
    <main style="width: 100vw;">
        <div class="container" style="margin-top: 100px">
            <div class="row">
                <div class="col">
                    <header class="mb-4">
                        <h2 class="text-white">{{ $division->name }}</h2>
                    </header>
                </div>
            </div>
            <div class="row">
                @foreach ($data as $user)
                    @if ($user->id != 1)
                        <div class="col-md-3 mb-3">
                            <div class="p-4 text-white text-center"
                                style="background: rgba(255, 255, 255, 0.15); border-radius: 10px; backdrop-filter: blur(5px);">
                                <div class="d-flex justify-content-center">
                                    <div class="rounded-pill bg-dark overflow-hidden" style="width: 100px; height: 100px;">
                                        <img src="{{ asset('storage/avatar/' . ($user->avatar ?? 'photo-profile.jpg')) }}"
                                            alt="" width="100%" height="">
                                    </div>
                                </div>
                                <div class="fw-light mt-4">
                                    <div class="fw-bold">{{ $user->name }}</div>
                                    <small>{{ $user->division->name }}</small>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </main>
@endsection
