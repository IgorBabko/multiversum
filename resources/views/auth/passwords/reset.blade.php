@extends('layout')
@section('content')
<div class="Page">
    <div class="Page__content Page__content--center">
        <form method="POST" action="{{ url('/password/reset') }}" autocomplete="off">
            <h1 class="Page__heading Page__heading--center">Сброс пароля</h1>
            {!! csrf_field() !!}
            <input type="hidden" name="token" value="{{ $token }}">
            <span class="help-block error">
                {{ $errors->first('email') }}
            </span>
            <input type="email" name="email" class="Input {{ $errors->first('email') ? 'error' : '' }}" value="{{ old('email') }}" placeholder="Email">
            <span class="help-block error">
                {{ $errors->first('password') }}
            </span>
            <input type="password" name="password" class="Input {{ $errors->first('password') ? 'error' : '' }}" placeholder="Новый пароль">
            <span class="help-block error">
                {{ $errors->first('password_confirmation') }}
            </span>
            <input type="password" name="password_confirmation" class="input {{ $errors->first('password_confirmation') ? 'error' : '' }}" placeholder="подтвердить пароль">
            <button type="submit" class="button">сбросить</button>
        </form>
    </div>
</div>
@endsection
