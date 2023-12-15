@extends('layouts.template')
@section('title', 'CODER - IT Telkom Surabaya')

@section('content')
    <main style="width: 100vw;">
        <div class="container my-5 pt-5">
            <div class="row">
                <div class="col text-white p-4"
                    style="background: rgba(255, 255, 255, 0.15); border-radius: 10px; backdrop-filter: blur(5px);">
                    <div class="rounded-3 overflow-hidden" style="height: auto">
                        <img src="{{ asset('storage/image/' . $data->thumbnail) }}" alt="" width="100%">
                    </div>
                    <div class="mt-2 mb-3">
                        <h1>{{ $data->title }}</h1>
                        <div class="d-inline-block px-4 pt-3 mt-3"
                            style="background: rgba(255, 255, 255, 0.15); border-radius: 10px; backdrop-filter: blur(2px);">
                            <p>{{ $data->created_at }}</p>
                        </div>
                        <div class="d-inline-block px-4 pt-3"
                            style="background: rgba(255, 255, 255, 0.15); border-radius: 10px; backdrop-filter: blur(2px);">
                            <p>{{ $data->category }}</p>
                        </div>
                        <p class="fw-light mt-5">{!! $data->content !!}</p>
                    </div>
                    <div class="mb-3">
                        <a href="{{ route('landingNews') }}" class="btn-main">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
