@extends('layouts.template')
@section('title', 'CODER - IT Telkom Surabaya')

@section('content')
    <main style="width: 100vw;">
        <div class="container mt-5 pt-5">
            <div class="row">
                @foreach ($data as $news)
                    <div class="col-md-4 mb-3">
                        <div class="p-3 text-white bg-custom">
                            <a href="{{ route('landingNews.show', $news->id) }}" class="text-decoration-none text-white">
                                <img src="{{ asset('storage/image/' . $news->thumbnail) }}" alt='image' width="100%">
                                <p class="text-left mt-3">{{ $news->title }} </p>
                            </a>
                            <div class="footer d-flex justify-content-between align-items-center">
                                <div>
                                    <small class="fw-light" style="color: rgba(255, 255, 255, 0.573);">180 Views</small>
                                </div>
                                <div class="fw-light" style="color: rgba(255, 255, 255, 0.573);">
                                    <small>{{ Carbon\Carbon::parse($news->created_at)->translatedFormat('d F Y h:i') }}
                                        WIB</small>
                                    &nbsp;
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection
