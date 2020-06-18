@extends('layouts.main')

@section('title', 'Add Student')

@section('content')
<div class="container mt-3">
  <form method="POST" action="../students">
    @csrf
    <div class="form-group">
      <label for="name">Nama :</label>
      <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" autofocus value="{{ old('name') }}" required>
      @error('name')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div> 
    
    <div class="form-group">
      <label for="nrp">NRP :</label>
      <input type="text" class="form-control @error('nrp') is-invalid @enderror" id="nrp" name="nrp" value="{{ old('nrp') }}" required>
      @error('nrp')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>

    <div class="form-group">
      <label for="email">E-mail :</label>
      <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
      @error('email')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>

    <div class="form-group">
      <label for="jurusan">Jurusan :</label>
      <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" name="jurusan" value="{{ old('jurusan') }}" required>
      @error('jurusan')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>

    <button type="submit" class="btn btn-primary float-right">Add Student</button>
  </form>
</div>
@endsection