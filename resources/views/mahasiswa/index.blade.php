@extends('layouts.main')

@section('title', 'Daftar Mahasiswa')

@section('container')
  <div class="container">
    <div class="row">
      <div class="col-10">
        <h1 class="mt-3">Daftar Mahasiswa!</h1>
        <table class="table table-striped">
          <thead class="table-info">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama</th>
              <th scope="col">NRP</th>
              <th scope="col">Jurusan</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($mahasiswa as $mhs)
            <tr>
              {{-- loop->iteration berfungsi untuk menghitung berapa kali mengulang / nomer urut --}}
              <th scope="row">{{$loop->iteration}}</th> 
              <td>{{ $mhs->nama}}</td>
              <td>{{ $mhs->nrp}}</td>
              <td>{{ $mhs->jurusan}}</td>
              <td>
                <a href="" class="badge badge-warning">edit</a>
                <a href="" class="badge badge-danger">hapus</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection