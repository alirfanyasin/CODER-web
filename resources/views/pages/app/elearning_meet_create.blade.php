@extends('layouts.app')

@section('title', 'CODER - Create Meet')

@section('content')
    <section>
        <div class="breadcrumb d-flex justify-content-between align-items-center text-white">
            <h1>Create Absence</h1>
        </div>
    </section>

    <div class="row">
        <div class="col-md-12">
            <div class="text-white p-4"
                style="background: rgba(255, 255, 255, 0.13); border-radius: 20px; backdrop-filter: blur(5px);">
                <header class="text-left">
                    <h5>Create Meet</h5>
                </header>

                <div class="mt-4">
                    <form action="">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
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
                            <div class="col-md-6">
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
