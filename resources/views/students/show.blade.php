@extends('layouts.main')

@section('title', 'Details')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-6">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
        <h5 class="card-title font-weight-bold"> Nama : {{ $student->name }}</h5>
          <p class="card-text">ID : {{ $student->nrp }}</p>
          <p class="card-text">E-mail : {{ $student->email }}</p>
          <p class="card-text">Jurusan : {{ $student->jurusan }}</p>
          <a href="{{ $student->id }}/edit" class="btn btn-primary">Edit</a>
          <form action="{{ $student->id }}" method="POST" class="d-inline">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger ">Delete</button>
          </form>
          <a href="/students" class="card-text float-right mt-3">Back</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection