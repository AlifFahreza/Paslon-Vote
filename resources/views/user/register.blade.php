@extends('layouts.auth.auth')

@section('title', 'Register')

@section('content')
<form method="POST" action="/user/register/store">
    @csrf
    <div class="text-center mb-3">
        <img src="{{ asset('assets/images/logos/logo_register.svg') }}" alt="Register Icon" style="width: 200px; height: 200px;">
        <h1 class="h3 mt-2 fw-normal" style="color: black;">Register</h1>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control mb-3" name="name" placeholder="Masukkan Nama">
      <label for="floatingInput">Nama</label>
    </div>
    <div class="form-floating">
      <input type="email" class="form-control mb-3" name="email" placeholder="Masukkan Email">
      <label for="floatingInput">Email</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control mb-3" name="password" placeholder="Masukkan Password">
      <label for="floatingPassword">Password</label>
    </div>

    <button class="btn w-100 py-2" type="submit" style="background-color: #FFBCBC; color: #000000;">Register</button>
  </form>
  <p>Sudah punya akun? <a href="{{ url('user/login') }}">Login</a></p>
@endsection
