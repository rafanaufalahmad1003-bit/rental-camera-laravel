@extends('layouts.guest')
@section('content')
<div class="brand-mark">RC</div>
<p class="eyebrow">RENTAL CAMERA</p>
<h1>Selamat datang</h1>
<p>Masuk untuk mengelola penyewaan kamera.</p>
@if(session('success'))
    <div class="success">{{ session('success') }}</div>
@endif
@if($errors->any())
    <div class="alert">{{ $errors->first() }}</div>
@endif
<form method="post" action="/login">
    @csrf
    <label>Username<input name="username" autocomplete="username" required autofocus value="{{ old('username') }}"></label>
    <label>Password<input name="password" type="password" autocomplete="current-password" required></label>
    <button class="button">Masuk</button>
</form>
@if($setup)
    <a class="muted setup-link" href="/setup">Setup admin pertama kali</a>
@endif
@endsection
