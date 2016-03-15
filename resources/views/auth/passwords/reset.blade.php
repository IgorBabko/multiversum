@extends('layout')

@section('content')
<div class="wrapper reset-password-block page-content">
    <div class="content">
        <form method="POST" action="{{ url('/password/reset') }}">
            <h1>Сброс пароля</h1>
            {!! csrf_field() !!}
            <input type="hidden" name="token" value="{{ $token }}">
            <input type="email" name="email" value="{{ $email or old('email') }}" placeholder="Email">
            <input type="password" name="password" placeholder="Новый пароль">
            <input type="password" name="password_confirmation" placeholder="Подтвердить пароль">
            <button type="submit">Сбросить</button>
        </form>
    </div>
</div>
@endsection
