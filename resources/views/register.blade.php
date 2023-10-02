@extends('layouts.main')

@section('container')
<h1>Register</h1>

@if(session()->has('failed'))
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
    {{ session('failed') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif
@if($errors->any())
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
    {{ implode('', $errors->all(':message')) }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif
<form action="/register" method="POST">
  @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">First Name</label>
    <input type="text" name="firstName" class="form-control @error('firstName') is-invalid @enderror" id="firstName" value="{{ old('firstName') }}">
    @error('firstName')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Last Name</label>
    <input type="text" name="lastName" class="form-control @error('lastName') is-invalid @enderror" id="lastName"  value="{{ old('lastName') }}">
    @error('lastName')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp"  value="{{ old('email') }}">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    @error('email')
      <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  </div>
  <div class="mb-3">
    <label for="inputPassword" class="form-label">Password</label>
    <input type="password" name="password" class="form-control @error('title') is-invalid @enderror" id="inputPassword">
    @error('password')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="repeatPassword" class="form-label">Repeat Password</label>
    <input type="password" name="repeatPassword" class="form-control @error('title') is-invalid @enderror" id="repeatPassword">
    @error('repeatPassword')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection