 @extends('layouts.main')

@section('title', 'Form Add Student')

@section('container')
  <div class="container">
    <div class="row">
      <div class="col-6">
        <h1 class="mt-3">Form Add Student!</h1>
      <form method="post" action="{{url('/students')}}">
        @csrf
          <div class="form-group">
            <label for="nama">Nama Lengkap</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Input your name">
            @error('nama')
            <div class="invalid-feedback">{{$message}}</div>
            @enderror
          </div>
          <div class="form-group">
            <label for="nrp">NRP</label>
            <input type="text" class="form-control @error('nrp') is-invalid @enderror" id="nrp" name="nrp" placeholder="Input your NRP">
            @error('nrp')
            <div class="invalid-feedback">{{$message}}</div>
            @enderror
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Input your email">
            @error('email')
            <div class="invalid-feedback">{{$message}}</div>
            @enderror
          </div>
          <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" name="jurusan" placeholder="Input your jurusan">
            @error('jurusan')
            <div class="invalid-feedback">{{$message}}</div>
            @enderror
          </div>
          <button type="submit" class="btn btn-primary">Add Student</button>
        </form>
      </div>
    </div>
  </div>
@endsection