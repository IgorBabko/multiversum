@extends('layout')
@section('content')
<div class="Page">
    <div class="Page__content profile">
        <form action="/profile" method="POST" autocomplete="off">
            <h1 class="Page__heading">Профиль</h1>
            {!! csrf_field() !!}
            <span class="help-block error">
                {{ $errors->first('name') }}
            </span>
            <input type="text" name="name" placeholder="Имя" class="Input {{ $errors->first('name') ? 'error' : '' }}" value="{{ $user->name ?? old('name') }}">
            <span class="help-block error">
                {{ $errors->first('email') }}
            </span>
            <input type="email" name="email" placeholder="Email" class="Input {{ $errors->first('email') ? 'error' : '' }}" value="{{ $user->email ?? old('email') }}">
            <span class="help-block error">
                {{ $errors->first('password') }}
            </span>
            <input type="password" name="password" placeholder="Пароль" class="Input {{ $errors->first('password') ? 'error' : '' }}">
            <span class="help-block error">
                {{ $errors->first('password_confirmation') }}
            </span>
            <input type="password" class="Input {{ $errors->first('password_confirmation') ? 'error' : '' }}" name="password_confirmation" placeholder="Подтвердить пароль">
            <button type="submit" class="Button">Изменить</button>
        </form>
    </div>
</div>
@stop
