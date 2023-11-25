@extends('layouts.app')

@section('title', 'CODER - Presence')

@section('content')
  <section>
    <div class="breadcrumb d-flex justify-content-between align-items-center text-white">
      <h1>Presence</h1>
      @role('admin')
        <div>
          <a href="{{ route('admin.presence.create') }}" class="btn-main">Create Presence</a>
        </div>
      @endrole
    </div>
  </section>

  <div class="row">
    <div class="col-md-8">
      <div class="text-white p-4"
        style="background: rgba(255, 255, 255, 0.13); border-radius: 20px; backdrop-filter: blur(5px);">
        <header class="text-left">
          <h5>Presence Mobile Development</h5>
        </header>

        <div class="mt-4">
          <table class="table rounded-4 table-striped" style="background: none">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Meeting</th>
                <th scope="col">Date</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data as $presence)
                <tr>
                  <th class="align-middle" scope="row">1</th>
                  <td class="align-middle">Pertemuan {{ $presence->meeting }}</td>
                  <td class="align-middle">{{ date('j F Y', strtotime($presence->date)) }}</td>
                  <td class="align-middle"><span
                      class="badge {{ $presence->status == 'Active' ? 'bg-primary' : '' }}">{{ $presence->status }}</span>
                  </td>
                  {{-- <td class="align-middle"><span class="badge bg-warning">Temporary</span></td> --}}
                  {{-- <td class="align-middle"><span class="badge bg-success">Active</span></td> --}}
                  <td>
                    <div class="d-flex">
                      <a href="{{ route('admin.presence.show') }}"
                        class="btn-action-custom d-flex justify-content-center align-items-center mx-2"><iconify-icon
                          icon="carbon:view"></iconify-icon></a>
                      <form action="" method="POST" class="d-inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                          class="btn-action-custom d-flex justify-content-center align-items-center"><iconify-icon
                            icon="mynaui:trash"></iconify-icon></button>
                      </form>
                      <a href=""
                        class="btn-action-custom d-flex justify-content-center align-items-center mx-2"><iconify-icon
                          icon="basil:edit-outline"></iconify-icon></a>
                      <a href=""
                        class="btn-action-custom d-flex justify-content-center align-items-center"><iconify-icon
                          icon="uil:share"></iconify-icon></a>
                    </div>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="text-white p-4"
        style="background: rgba(255, 255, 255, 0.13); border-radius: 20px; backdrop-filter: blur(5px);">
        <header class="text-left">
          <h5>Division</h5>
        </header>
        <div>
          <ul class="mt-3">
            <li class="mb-3 list-division">
              <a href="" class="text-white fw-light text-decoration-none">Web Development</a>
            </li>
          </ul>
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