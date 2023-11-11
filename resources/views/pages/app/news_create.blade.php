@extends('layouts.app')

@section('title', 'CODER - Create News')

@section('content')
  <section>
    <div class="breadcrumb d-flex justify-content-between align-items-center text-white">
      <h1>Create News</h1>
      {{-- <div>
        <a href="" class="btn-main">Add News</a>
      </div> --}}
    </div>
    <div class="row">
      <div class="col-md-8 mb-3">
        <div class="p-3 text-white"
          style="background: rgba(255, 255, 255, 0.15); border-radius: 10px; backdrop-filter: blur(5px);">
          <div class="input-group mb-4">
            <input type="text" name="title" class="form-control text-white fw-light"
              style="height: 50px; background: rgba(255, 255, 255, 0.02);  border-radius: 10px; border: none; border-bottom: 2px solid white;
                  backdrop-filter: blur(5px);"
              id="email" placeholder="Title">
          </div>
          <div class="input-group mb-4">
            <textarea name="content" id="content" cols="20" rows="10" class="form-control text-white fw-light"
              style="background: rgba(255, 255, 255, 0.02);  border-radius: 10px; border: none; border-bottom: 2px solid white;
            backdrop-filter: blur(5px);"
              placeholder="Content"> Type your content here ...
            </textarea>

          </div>
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="p-3 text-white"
          style="background: rgba(255, 255, 255, 0.15); border-radius: 10px; backdrop-filter: blur(5px);">
          <img src="{{ asset('assets/img/img-1.png') }}" alt="" width="100%">
          <p class="text-left mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
          <div class="footer d-flex justify-content-between align-items-center">
            <div>
              <small class="fw-light" style="color: rgba(255, 255, 255, 0.573);">180 Views</small>
            </div>
            <div class="fw-light" style="color: rgba(255, 255, 255, 0.573);">
              <small>3 hour ago</small> &nbsp;
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
