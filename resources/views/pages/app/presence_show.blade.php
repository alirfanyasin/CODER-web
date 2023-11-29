@extends('layouts.app')

@section('title', 'CODER - Show Presence')

@section('content')
  <section>
    <div class="breadcrumb d-flex justify-content-between align-items-center text-white">
      <h1>Presence</h1>
    </div>
  </section>

  <div class="row">
    <div class="col-md-12">
      <div class="text-white p-4 bg-custom">
        <header class="text-left">
          <h5>Presence {{ $division->name }}</h5>
        </header>

        <div class="mt-4">
          <form action="{{ route('admin.presence.user.store') }}" method="POST">
            @csrf
            <div class="mb-3 d-flex justify-content-between align-items-center">
              <button type="submit" class="text-white px-3 py-2"
                style="background: rgba(255, 255, 255, 0.02);  border-radius: 10px; border: none;
              backdrop-filter: blur(5px);">Save</button>
              <div>
                {{ date('j F Y', strtotime($presence->date)) }}
              </div>
            </div>
            <table class="table rounded-4 table-striped" style="background: none">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Prodi</th>
                  <th scope="col">Status</th>
                </tr>
              </thead>
              <tbody>
                @php
                  $no = 1;
                @endphp
                @foreach ($user as $data)
                  @if ($data->id != 1)
                    <input type="hidden" name="user_id" value="{{ $data->name }}">
                    <input type="hidden" name="presence_id" value="{{ $presence->id }}">
                    <input type="hidden" name="division_id" value="{{ $presence->division->id }}">
                    <tr>
                      <th class="align-middle" scope="row">{{ $no++ }}</th>
                      <td class="align-middle">{{ $data->name }}</td>
                      <td class="align-middle">{{ $data->field_of_study }}</td>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="">
                            <input type="radio" id="hadir" name="status[{{ $data->id }}]" value="Hadir"
                              {{ getStatusChecked($data->user_presences, $presence->id, 'Hadir') }}>
                            <label>Hadir</label>
                          </div>
                          <div class="mx-4">
                            <input type="radio" id="izin" name="status[{{ $data->id }}]" value="Izin"
                              {{ getStatusChecked($data->user_presences, $presence->id, 'Izin') }}>
                            <label>Izin</label>
                          </div>
                          <div class="">
                            <input type="radio" id="alfa" name="status[{{ $data->id }}]" value="Alfa"
                              {{ getStatusChecked($data->user_presences, $presence->id, 'Alfa') }}>
                            <label>Alfa</label>
                          </div>
                        </div>
                      </td>
                    </tr>
                  @endif
                @endforeach
              </tbody>
            </table>
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

@php
  function getStatusChecked($userPresences, $presenceId, $status)
  {
      foreach ($userPresences as $userPresence) {
          if ($userPresence->presence_id == $presenceId && $userPresence->status == $status) {
              return 'checked';
          }
      }
      return '';
  }
@endphp
