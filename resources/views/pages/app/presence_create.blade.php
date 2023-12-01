@extends('layouts.app')

@section('title', 'CODER - Create Presence')

@section('content')
  <section>
    <div class="breadcrumb d-flex justify-content-between align-items-center text-white">
      <h1>Create Presence</h1>
    </div>
  </section>

  <div class="row">
    <div class="col-md-12">
      <div class="text-white p-4 bg-custom">
        <header class="text-left">
          <h5>Create Presence</h5>
        </header>

        <div class="mt-4">
          <form action="{{ route('admin.presence.store') }}" method="POST">
            @csrf
            <div class="row">
              <div class="col-md-4">
                <div class="input-group-custom mb-3">
                  <input type="number" name="meeting" class="form-control text-white fw-light"
                    style="height: 50px; background: rgba(255, 255, 255, 0.02);  border-radius: 10px; border: none; border-bottom: 2px solid white;
                      backdrop-filter: blur(5px);"
                    placeholder="Pertemuan">
                  @error('meeting')
                    <small class="fw-light">{{ $message }}</small>
                  @enderror
                </div>
              </div>
              <div class="col-md-4">
                <div class="input-group-custom mb-3">
                  @role('admin')
                    <select class="form-select text-white fw-light"
                      style="height: 50px; background: rgba(255, 255, 255, 0.02);  border-radius: 10px; border: none; border-bottom: 2px solid white;
                      backdrop-filter: blur(5px);"
                      name="division_id" id="division">
                      <option selected disabled class="text-black">Pilih Divisi</option>
                      @foreach ($data_division as $division)
                        <option value="{{ $division->id }}" class="text-black">{{ $division->name }}</option>
                      @endforeach
                    </select>
                    @error('division_id')
                      <small class="fw-light">{{ $message }}</small>
                    @enderror
                  @endrole
                  @if (Auth::user()->hasPermissionTo('admin-division'))
                    <select class="form-select text-white fw-light"
                      style="height: 50px; background: rgba(255, 255, 255, 0.02);  border-radius: 10px; border: none; border-bottom: 2px solid white;
                  backdrop-filter: blur(5px);"
                      name="division_id" id="division">
                      <option selected value="{{ Auth::user()->division_id }}" class="text-black">
                        {{ Auth::user()->division->name }}
                      </option>
                    </select>
                  @endif
                </div>
              </div>
              <div class="col-md-4">
                <div class="input-group-custom mb-3">
                  <input type="date" name="date" class="form-control text-white fw-light"
                    style="height: 50px; background: rgba(255, 255, 255, 0.02);  border-radius: 10px; border: none; border-bottom: 2px solid white;
                      backdrop-filter: blur(5px);"
                    placeholder="Date">
                  @error('date')
                    <small class="fw-light">{{ $message }}</small>
                  @enderror
                </div>
              </div>
            </div>
            <button type="submit" class="btn-main"
              style="background: rgba(255, 255, 255, 0.02);  border-radius: 10px; border: none;
              backdrop-filter: blur(5px);">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <style>
    .list-division {
      transition: .7s;
    }

    .list-division:hover {
      background: rgba(255, 255, 255, 0.13);
      border-radius: 5px;
      padding: 2px 10px;
      backdrop-filter: blur(5px);
    }

    table.table {
      --bs-table-bg: none;
      --bs-table-color: white;
      --bs-table-striped-color: white;
    }
  </style>
@endsection
