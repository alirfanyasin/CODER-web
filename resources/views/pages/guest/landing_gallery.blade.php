@extends('layouts.template')
@section('title', 'CODER - IT Telkom Surabaya')

<style>
    .gallery {
        transition: transform 1s;
    }

    .gallery:hover {
        transform: scale(1.5);
    }
</style>

@section('content')
    <main style="width: 100vw;">
        <div class="container mt-5 pt-5">
            {{-- <header class="row text-center position-relative mb-5" data-aos="zoom-in" data-aos-duration="2000">
                <h2 class="fw-semibold text-white">Gallery</h2>
                <div class="d-flex justify-content-center position-absolute mt-5">
                    <img src="{{ asset('assets/img/gallery.png') }}" alt="" style="z-index: -99;">
                </div>
            </header> --}}
            <div class="row ">
                @foreach ($data as $img)
                    <div class="col-lg-4 col-md-6 mb-3">
                        <div class="position-relative">
                            <a href="{{ asset('storage/gallery/' . $img->img) }}"
                                class="p-3 d-block overflow-hidden bg-custom">
                                <div class="overflow-hidden gallery"
                                    style=" height: 200px; width: 100%; border-radius: 10px; ">
                                    <img src="{{ asset('storage/gallery/' . $img->img) }}" alt="Img" width="100%"
                                        class="rounded-3">
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection
