@extends('layouts.main')

@section('title', 'Change Password')

@section('top')
  <h2>Change Password</h2>
@endsection

@section('content')

  @if(session('status'))
    <div class="alert alert-success">{{ session('status') }}</div>
  @endif

<form action="/change-password" method="POST" style="width: 50%">
  @csrf
  @method('patch')
  <div class="form-group">
    <label for="old_password">Old password</label>
    <input type="password" class="form-control @error('old_password') is-invalid @enderror" id="old_password" name="old_password" value="{{ old('old_password') }}" autofocus required>
    @error('old_password')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>

  <div class="form-group">
    <label for="password" >New Password</label>
    <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" required>
    @error('password')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
  
  <div class="form-group">
    <label for="password_confirmation" >Confirm New Password</label>
    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" required>
    @error('password_confirmation')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>

  <button type="submit" class="btn btn-primary mt-2 float-right">Change Password</button>
</form>

@endsection