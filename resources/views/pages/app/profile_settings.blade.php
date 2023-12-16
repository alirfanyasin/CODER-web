@extends('layouts.app')

@section('title', 'CODER - My Profile Settings ' . $data->name)

@section('content')
  <section>
    <div class="breadcrumb d-flex justify-content-between align-items-center text-white">
      <h1>Profile Settings</h1>
    </div>
  </section>
  <section>
    @if (Auth::user()->hasRole('admin') || Auth::user()->hasPermissionTo('admin-division'))
      <form action="{{ route('admin.my-profile.settings.update', $data->id) }}" method="POST" enctype="multipart/form-data">
    @endif
    @if (Auth::user()->hasRole('user'))
      <form action="{{ route('user.my-profile.settings.update', $data->id) }}" method="POST" enctype="multipart/form-data">
    @endif
    @csrf
    @method('PUT')
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="text-white p-4"
            style="background: rgba(255, 255, 255, 0.13); border-radius: 20px; backdrop-filter: blur(5px);">
            <div class="input-group-custom mb-3">
              <input type="text" name="name" class="form-control text-white fw-light"
                style="height: 50px; background: rgba(255, 255, 255, 0.02);  border-radius: 10px; border: none; border-bottom: 2px solid white;
                      backdrop-filter: blur(5px);"
                placeholder="Nama Lengkap" value="{{ $data->name }}">
              @error('name')
                <small class="fw-light">{{ $message }}</small>
              @enderror
            </div>
            <div class="input-group-custom mb-3">
              <input type="number" name="nim" class="form-control text-white fw-light"
                style="height: 50px; background: rgba(255, 255, 255, 0.02);  border-radius: 10px; border: none; border-bottom: 2px solid white;
                      backdrop-filter: blur(5px);"
                placeholder="NIM" value="{{ $data->nim }}">
              @error('nim')
                <small class="fw-light">{{ $message }}</small>
              @enderror
            </div>
            <div class="input-group-custom mb-3">
              <input type="text" name="field_of_study" class="form-control text-white fw-light"
                style="height: 50px; background: rgba(255, 255, 255, 0.02);  border-radius: 10px; border: none; border-bottom: 2px solid white;
                      backdrop-filter: blur(5px);"
                placeholder="Jurusan" value="{{ $data->field_of_study }}">
              @error('field_of_study')
                <small class="fw-light">{{ $message }}</small>
              @enderror
            </div>
            <div class="input-group-custom mb-3">
              <input type="number" name="batch" class="form-control text-white fw-light"
                style="height: 50px; background: rgba(255, 255, 255, 0.02);  border-radius: 10px; border: none; border-bottom: 2px solid white;
                      backdrop-filter: blur(5px);"
                placeholder="Tahun Angkatan" value="{{ $data->batch }}">
              @error('batch')
                <small class="fw-light">{{ $message }}</small>
              @enderror
            </div>
            <div class="input-group-custom mb-3">
              <input type="text" name="email" class="form-control text-white fw-light"
                style="height: 50px; background: rgba(255, 255, 255, 0.02);  border-radius: 10px; border: none; border-bottom: 2px solid white;
                      backdrop-filter: blur(5px);"
                placeholder="Email" value="{{ $data->email }}" disabled>
              @error('email')
                <small class="fw-light">{{ $message }}</small>
              @enderror
            </div>
            <div class="input-group-custom mb-3">
              <input type="number" name="phone_number" class="form-control text-white fw-light"
                style="height: 50px; background: rgba(255, 255, 255, 0.02);  border-radius: 10px; border: none; border-bottom: 2px solid white;
                      backdrop-filter: blur(5px);"
                placeholder="Nomor Telepon" value="{{ $data->phone_number }}">
              @error('phone_number')
                <small class="fw-light">{{ $message }}</small>
              @enderror
            </div>
            <div class="input-group-custom mb-3">
              <input type="text" name="division_id" class="form-control text-white fw-light"
                style="height: 50px; background: rgba(255, 255, 255, 0.02);  border-radius: 10px; border: none; border-bottom: 2px solid white;
                      backdrop-filter: blur(5px);"
                placeholder="Division" value="{{ $data->division->name }}" disabled>
              @error('division_id')
                <small class="fw-light">{{ $message }}</small>
              @enderror
            </div>
            <div class="input-group-custom mb-3">
              <input type="password" name="password" class="form-control text-white fw-light"
                style="height: 50px; background: rgba(255, 255, 255, 0.02);  border-radius: 10px; border: none; border-bottom: 2px solid white;
                      backdrop-filter: blur(5px);"
                placeholder="Password" value="{{ $data->password }}">
              @error('division_id')
                <small class="fw-light">{{ $message }}</small>
              @enderror
            </div>
            <div class="input-group-custom">
              <button type="submit" class="text-white px-5 py-2"
                style="background: rgba(255, 255, 255, 0.02);  border-radius: 10px; border: none;
                  backdrop-filter: blur(5px);">Update</button>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="p-3 text-white"
            style="background: rgba(255, 255, 255, 0.15); border-radius: 10px; backdrop-filter: blur(5px); border-bottom: 2px solid white">
            <img src="{{ asset('storage/avatar/' . ($data->avatar ?? 'photo-profile.jpg')) }}" id="result"
              alt="" class="w-100" width="100%" style="border-radius: 10px;">
          </div>
          <input type="file" name="avatar" id="thumbnail" class="form-control mt-3 text-white"
            style="background: rgba(255, 255, 255, 0.15); border-radius: 10px; backdrop-filter: blur(5px);"
            onchange="readFile(this)" value="{{ $data->avatar }}">
          @error('avatar')
            <small class="fw-light">{{ $message }}</small>
          @enderror
        </div>
      </div>
    </div>
    </form>
  </section>
@endsection

@push('js-libraries')
  <script>
    // File Reader
    function readFile(input) {
      let file = input.files[0];
      let fileReader = new FileReader();
      fileReader.readAsText(file);
      fileReader.onload = function() {
        document.getElementById("result").src = URL.createObjectURL(file);
      };
      fileReader.onerror = function() {
        alert(fileReader.error);
      };
    }
  </script>
@endpush
