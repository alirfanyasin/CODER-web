@extends('layouts.app')

@section('title', 'CODER - Division')

@section('content')
  <section>
    <div class="breadcrumb d-flex justify-content-between align-items-center text-white">
      <h1>E-Learning</h1>
      <div>
        <a href="{{ route('admin.division.create') }}" class="btn-main">Add Division</a>
      </div>
    </div>
  </section>
@endsection
