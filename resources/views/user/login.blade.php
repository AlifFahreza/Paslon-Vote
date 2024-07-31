@extends('layouts.auth.auth')

@section('title', 'Login')

@section('content')
@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
<form method="POST" action="/user/login/auth">
    @csrf
    <div class="text-center mb-3">
        <img src="{{ asset('assets/images/logos/Logo_Login.svg') }}" alt="Login Icon" style="width: 250px; height: 250px;">
        <h1 class="h3 mt-2 fw-normal">Login E-Voting</h1>
    </div>
    <div class="form-floating">
      <input type="email" class="form-control mb-3" name="email" placeholder="Masukkan Email">
      <label for="floatingInput">Email</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control mb-3" name="password" placeholder="Masukkan Password">
      <label for="floatingPassword">Password</label>
    </div>

    <button class="btn w-100 py-2" type="submit" style="background-color: #FFBCBC; color: #000000;">Login</button>
  </form>
  <p>Belum punya akun? <a href="{{ url('user/register') }}">Register</a></p>
@endsection
