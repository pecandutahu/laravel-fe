@extends('layouts.main')

@section('container')
<h1>Your Profile</h1>

@if(session()->has('failed'))
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
    {{ session('failed') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif

<form action="{{ route("user.update", $user->id) }}" method="POST">
  @csrf
  @method('put')
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">First Name</label>
    <input type="hidden" name="id" class="form-control value="{{ $user->id }}">
    <input type="text" name="firstName" class="form-control @error('firstName') is-invalid @enderror" id="firstName" value="{{ $user->firstName }}">
    @error('firstName')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Last Name</label>
    <input type="text" name="lastName" class="form-control @error('lastName') is-invalid @enderror" id="lastName"  value="{{ $user->lastName  }}">
    @error('lastName')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp"  value="{{ $user->email }}">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    @error('email')
      <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection