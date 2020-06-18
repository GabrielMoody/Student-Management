@extends('layouts.main')

@section('title', 'Students')

@section('top')
<form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" method="GET" action="/students">
  <div class="input-group">
    <input type="text" class="form-control bg-light border-0 small" placeholder="Search students" aria-label="Search" aria-describedby="basic-addon2" name="search">
    <div class="input-group-append">
      <button class="btn btn-primary" type="submit">
        <i class="fas fa-search fa-sm"></i>
      </button>
    </div>
  </div>
</form>
@endsection

@section('content')
<div class="container">
  <div class="row">
    <div class="col-6">
      <h1 class="mt-2">Students Profiles</h1>

      <a href="/students/create" class="btn btn-primary my-3">Add Student</a>

      @if (session('status'))
        <div class="alert alert-success">
          {{ session('status') }}
        </div>
      @endif

      <ul class="list-group">
        @foreach ($students as $student)
        <li class="list-group-item d-flex justify-content-between align-items-center">
          {{ $student->name }}
          <a href="/students/{{ $student->id }}" class="badge badge-info">Details</a>
        </li>          
        @endforeach
      </ul>

    </div>
  </div>
</div>
@endsection