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
      <div class="text-white p-4"
        style="background: rgba(255, 255, 255, 0.13); border-radius: 20px; backdrop-filter: blur(5px);">
        <header class="text-left">
          <h5>Presence Mobile Development</h5>
        </header>

        <div class="mt-4">
          <form action="">
            <div>
              <button type="submit" class="text-white px-3 py-2"
                style="background: rgba(255, 255, 255, 0.02);  border-radius: 10px; border: none;
              backdrop-filter: blur(5px);">Save</button>
              <button type="submit" class="text-white px-3 py-2"
                style="background: rgba(255, 255, 255, 0.02);  border-radius: 10px; border: none;
              backdrop-filter: blur(5px);">Save
                Temporary</button>

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
                <tr>
                  <th class="align-middle" scope="row">1</th>
                  <td class="align-middle">Dandy Maulna Ainul Yakin</td>
                  <td class="align-middle">Informatika</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="">
                        <input type="radio" id="hadir" name="status" value="Hadir">
                        <label>Hadir</label>
                      </div>
                      <div class="mx-4">
                        <input type="radio" id="izin" name="status" value="Izin">
                        <label>Izin</label>
                      </div>
                      <div class="">
                        <input type="radio" id="alfa" name="status" value="Alfa">
                        <label>Alfa</label>
                      </div>
                    </div>
                  </td>
                </tr>
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
