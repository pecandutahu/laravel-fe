@extends('layouts.main')

@section('container')
<h1>Login</h1>
@if(session()->has('loginError'))
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ session('loginError') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif
@if(session()->has('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif


<form action="/login" method="POST">
  @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp"  value="{{ old('email') }}" autofocus>
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
  <button type="submit" class="btn btn-primary">Login</button>
</form>
@endsection