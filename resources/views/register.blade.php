@extends('layouts.main')

@section('main')
<h2 class="title">Создать учетную запись</h2>
<form action="{{route('register')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="email" class="form-label">Email адрес</label>
        <input type="email" class="form-control @error('email') is-invalid @enderror"  id="email" name="email">
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">ФИО</label>
        <input type="text" class="form-control" id="name">
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Номер тел.</label>
        <input type="text" class="form-control" id="number">
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Пароль</label>
        <input type="password" class="form-control" id="password">
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Подтверждение пароля</label>
        <input type="password" class="form-control" id="password_confirm">
        <button type="submit" class="btn-success">Создать аккаунт</button>
    </div>
</form>
@endsection
