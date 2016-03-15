@extends('layout')
@section('content')
<div class="wrapper login-block page-content">
    <div class="content">
        <form method="POST" action="{{ url('/login') }}" class="ac-custom ac-checkbox ac-checkmark" autocomplete="off">
            <h1>Авторизация</h1>
            {!! csrf_field() !!}
            <span class="help-block error">
                {{ $errors->first('email') }}
            </span>
            <input type="email" name="email" placeholder="Email" class="{{ $errors->first('email') ? 'error' : '' }}" value="{{ old('email') }}">
            <span class="help-block error">
                {{ $errors->first('password') }}
            </span>
            <input type="password" name="password" class="{{ $errors->first('password') ? 'error' : '' }}" placeholder="Пароль" value="{{ old('password') }}">
            <ul>
                <li><input id="cb6" name="cb6" type="checkbox"><label for="cb6">Запомнить меня</label></li>
            </ul>
            <button type="submit">Войти</button>
            <span class="reset-password-span">
                <a class="btn btn-link reset-password" href="{{ url('/password/reset') }}">Забыли пароль?</a>
            </span>
        </form>
    </div>
</div>
@endsection
