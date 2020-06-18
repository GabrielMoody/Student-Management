@extends('layouts.main')

@section('title', 'My Profile')

@section('top')
  <h2>My Profile</h2>
@endsection

@section('content')

@if(session('status'))
  <div class="alert alert-success">
    {{ session('status') }}
  </div>
@endif
    
<form action="/profile" method="POST" enctype="multipart/form-data" style="width: 50%">
  @csrf
  @method('patch')
  <div class="form-group">
    <label for="name">Name</label>
    <input type="name" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ Auth::user()->name }}">
    @error('name')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>

  <div class="form-group">
    <label for="image">Profile Picture</label>
    <br>
  <img class="img-thumbnail" alt="{{ Auth::user()->name}} Profile" style="width: 200px; height: 200px" src="{{ asset('img/' . Auth::user()->image) }}">
    <br>
    <input type="file" id="image" name="image">
  </div>
  <button type="submit" class="btn btn-primary mt-2 float-right">Change Profile</button>
</form>

@endsection