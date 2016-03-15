@extends('layout')

@section('content')
<div class="wrapper register-block page-content">
    <div class="content">
        <form method="POST" action="{{ url('/register') }}" class="ac-custom ac-checkbox ac-checkmark" autocomplete="off">
            <h1>Регистрация</h1>
            {!! csrf_field() !!}
            <span class="help-block error">
                {{ $errors->first('name') }}
            </span>
            <input type="text" class="{{ $errors->first('name') ? 'error' : '' }}" name="name" placeholder="Ваше имя" value="{{ old('name') }}">
            <span class="help-block error">
                {{ $errors->first('email') }}
            </span>
            <input type="email" class="{{ $errors->first('email') ? 'error' : '' }}" name="email" placeholder="Email" value="{{ old('email') }}">
            <span class="help-block error">
                {{ $errors->first('password') }}
            </span>
            <input type="password" class="{{ $errors->first('password') ? 'error' : '' }}" name="password" placeholder="Пароль">
            <input type="password" class="{{ $errors->first('password_confirmation') ? 'error' : '' }}" name="password_confirmation" placeholder="Подтвердить пароль">
            <button type="submit">Создать аккаунт</button>
        </form>
    </div>
</div>
@endsection
