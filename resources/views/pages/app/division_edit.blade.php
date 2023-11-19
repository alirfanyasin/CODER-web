@extends('layouts.app')

@section('title', 'CODER - Edit Division')

@section('content')
  <section>
    <div class="breadcrumb d-flex justify-content-between align-items-center text-white">
      <h1>Edit Division</h1>
    </div>

    <div class="row">
      <div class="col-12 mb-3">
        <div class="p-3 text-white"
          style="background: rgba(255, 255, 255, 0.15); border-radius: 10px; backdrop-filter: blur(5px);">
          <form action="{{ route('admin.division.update', $data->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="input-group mb-4">
              <input type="text" name="name" class="form-control text-white fw-light"
                style="height: 50px; background: rgba(255, 255, 255, 0.02);  border-radius: 10px; border: none; border-bottom: 2px solid white;
                  backdrop-filter: blur(5px);"
                id="name" placeholder="Name Division" value="{{ $data->name }}">
            </div>
            <div class="input-group mb-4">
              <input type="text" name="description" class="form-control text-white fw-light"
                style="height: 50px; background: rgba(255, 255, 255, 0.02);  border-radius: 10px; border: none; border-bottom: 2px solid white;
                  backdrop-filter: blur(5px);"
                id="description" placeholder="Description" value="{{ $data->description }}">
            </div>
            <div class="input-group mb-4">
              <input type="text" name="icon" class="form-control text-white fw-light"
                style="height: 50px; background: rgba(255, 255, 255, 0.02);  border-radius: 10px; border: none; border-bottom: 2px solid white;
                  backdrop-filter: blur(5px);"
                id="icon" placeholder="Icon" value="{{ $data->icon }}">
            </div>
            <div class="input-group">
              <button type="submit" class="text-white px-5 py-2"
                style="background: rgba(255, 255, 255, 0.02);  border-radius: 10px; border: none;
              backdrop-filter: blur(5px);">Update</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

@endsection
