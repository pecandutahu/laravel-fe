@extends('layouts.main')

@section('container')
<h1>{{ $title }}</h1>


@if(session()->has('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif

<form action="{{ route('user.destroy', $user->id) }}" method="POST">
  @csrf
  @method("DELETE")
  <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure?')"><i class="bi bi-trash3"></i> Disable My Account</button>
  <a class="btn btn-dark" href="{{ route('user.edit', $user->id) }}"><i class="bi bi-pencil-square"></i>Edit Profile</a>
</form>

@if(session()->has('failed'))
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
    {{ session('failed') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif

<div class="container mt-4">
  <div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header p-5 bg-dark"></div>
      <div class="card-body text-center">
        <h5 class="card-title mt-4 mb-0">{{ $user->firstName . ' ' . $user->lastName}}</h5>
        <span>{{ $user->email }}</span>
        <p class="card-text mt-2">Some nerdy cheesy Twitter-like bio. 🔥 Emoji 🧐</p>
      </div>
      <div class="position-absolute profile-pic-wrapper">
        <img src="http://i.pravatar.cc/64" class="rounded-circle img-thumbnail" alt="Mads Obel">
      </div>
    </div>
  </div>
</div>  
</div>

@endsection