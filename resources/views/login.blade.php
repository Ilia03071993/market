@extends('layouts.main')

@section('main')
<h2 class="title">Вход</h2>
<form action="">
    @csrf
    <div class="mb-3">
        <label for="email" class="form-label">Email адрес</label>
        <input type="email" class="form-control" id="email">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Пароль</label>
        <input type="password" class="form-control" id="password">
    </div>
</form>
@endsection
