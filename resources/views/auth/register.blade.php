@extends('layout')
@section('content')
<div class="Page">
    <div class="Page__content Page__content--with-padding register">
        <form method="POST" action="{{ url('/register') }}" autocomplete="off">
            <h1 class="Page__heading Page__heading--blue">Регистрация</h1>
            {!! csrf_field() !!}
            <span class="help-block error">
                {{ $errors->first('name') }}
            </span>
            <input type="text" class="Input {{ $errors->first('name') ? 'error' : '' }}" name="name" placeholder="Ваше имя" value="{{ old('name') }}">
            <span class="help-block error">
                {{ $errors->first('email') }}
            </span>
            <input type="email" class="Input {{ $errors->first('email') ? 'error' : '' }}" name="email" placeholder="Email" value="{{ old('email') }}">
            <span class="help-block error">
                {{ $errors->first('password') }}
            </span>
            <input type="password" class="Input {{ $errors->first('password') ? 'error' : '' }}" name="password" placeholder="Пароль">
            <span class="help-block error">
                {{ $errors->first('password_confirmation') }}
            </span>
            <input type="password" class="Input {{ $errors->first('password_confirmation') ? 'error' : '' }}" name="password_confirmation" placeholder="Подтвердить пароль">
            <button type="submit" class="Button">Создать аккаунт</button>
        </form>
    </div>
</div>
@endsection
