@extends('layouts.main')

@section('title', 'Daftar Mahasiswa')

@section('container')
  <div class="container">
    <div class="row">
      <div class="col-6">
        <h1 class="mt-3">Daftar Mahasiswa!</h1>
        <a href="{{url('/students/create')}}" class="btn btn-primary mb-3">Add Student</a>
        <ul class="list-group">
          @foreach ($students as $student)
          <li class="list-group-item d-flex justify-content-between align-items-center">
            {{ $student->nama}}
          <a href="{{url('/students/'.$student->id)}}" class="badge badge-info badge-pill">Detail</a>
            @endforeach
          </li>
        </ul>
      </div>
    </div>
  </div>
@endsection