@extends('layouts.main')

@section('title', 'Edit Student')

@section('content')
<div class="container mt-3">
  <form method="POST" action="/students/{{ $student->id }}">
    @method('patch')
    @csrf
    <div class="form-group">
      <label for="name">Nama :</label>
      <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" autofocus value="{{ $student->name }}" required>
      @error('name')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div> 
    
    <div class="form-group">
      <label for="nrp">NRP :</label>
      <input type="text" class="form-control @error('nrp') is-invalid @enderror" id="nrp" name="nrp" value="{{ $student->nrp }}" required>
      @error('nrp')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>

    <div class="form-group">
      <label for="email">E-mail :</label>
      <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ $student->email }}" required>
      @error('email')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>

    <div class="form-group">
      <label for="jurusan">Jurusan :</label>
      <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" name="jurusan" value="{{ $student->jurusan }}" required>
      @error('jurusan')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>

    <button type="submit" class="btn btn-primary float-right">Ubah Data</button>
  </form>
</div>
@endsection