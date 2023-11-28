@extends('layouts.app')

@section('title', 'CODER - Meet')

@section('content')
  <section>
    <div class="breadcrumb d-flex justify-content-between align-items-center text-white">
      <h1>E-Learning</h1>
    </div>
  </section>

  <div class="row">
    <div class="col-md-12">
      <div class="text-white p-4"
        style="background: rgba(255, 255, 255, 0.13); border-radius: 20px; backdrop-filter: blur(5px);">
        <header class="text-left">
          <h5>Meeting</h5>
        </header>

        <div class="mt-4">
          <form action="{{ route('admin.elearning.meet.update', $meet->id) }}">
            @csrf
            @method('PUT')
            <div>
              <button type="submit" class="text-white px-3 py-2"
                style="background: rgba(255, 255, 255, 0.02);  border-radius: 10px; border: none;
              backdrop-filter: blur(5px);">Save</button>
            </div>
            <table class="table rounded-4 table-striped" style="background: none">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Topic</th>
                  <th scope="col">Meeting</th>
                  <th scope="col">Start Time</th>
                  <th scope="col">End Time</th>
                  <th scope="col">Link</th>
                  <th scope="col">Type</th>
                </tr>
              </thead>
              @foreach ($data as $meet)
                <tbody>
                  <tr>
                    <th class="align-middle" scope="row">1</th>
                    <td class="align-middle">{{ $meet->topic }}</td>
                    <td class="align-middle">{{ $meet->meeting }}</td>
                    <td class="align-middle">{{ $meet->start_time }}</td>
                    <td class="align-middle">{{ $meet->end_time }}</td>
                    <td class="align-middle">{{ $meet->link }}</td>
                    <td class="align-middle">{{ $meet->type }}</td>
                    {{-- <td>
                                        <div class="d-flex align-items-center">
                                        </div>
                                    </td> --}}
                  </tr>
                </tbody>
              @endforeach
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
