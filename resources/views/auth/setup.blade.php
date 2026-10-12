@extends('layouts.guest')
@section('content')
<div class="brand-mark">RC</div>
<p class="eyebrow">PENGATURAN AWAL</p>
<h1>Buat akun admin</h1>
<p>Gunakan password minimal 8 karakter.</p>
@if($errors->any())
    <div class="alert">{{ $errors->first() }}</div>
@endif
<form method="post" action="/setup">
    @csrf
    <label>Nama<input name="name" required value="{{ old('name') }}"></label>
    <label>Username<input name="username" minlength="3" required value="{{ old('username') }}"></label>
    <label>Password<input type="password" name="password" minlength="8" required></label>
    <button class="button">Buat admin</button>
</form>
@endsection
