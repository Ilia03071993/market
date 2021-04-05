@extends('layouts.main')

@section('main')
    <h2 class="title">Создать учетную запись</h2>
    <form action="{{route('register')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email адрес</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email">
            @error('email')
            <div class="alert alert-danger mt-3" role="alert">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">ФИО</label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
            value="{{ old('name') }}" required autocomplete="name" autofocus >
            @error('name')
            <div class="alert alert-danger mt-3" role="alert">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="number" class="form-label">Номер тел.</label>
            <input type="text" class="form-control @error('phone') is-invalid @enderror"  name="phone"
                   value="{{old('phone')}}" id="number">
            @error('phone')
            <div class="alert alert-danger mt-3" role="alert">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Пароль</label>
            <input type="password" class="form-control" id="password"
                   class="form-control @error('password') is-invalid @enderror" name="password" required
                   autocomplete="new-password">
            @error('password')
            <div class="alert alert-danger mt-3" role="alert">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password-confirm" class="form-label">Подтверждение пароля</label>
            <input type="password" class="form-control" id="password_confirm" name="password_confirmation">
        </div>
        <button type="submit" class="btn-success">Создать аккаунт</button>
    </form>
@endsection
