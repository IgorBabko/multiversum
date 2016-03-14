@extends('layout')

@section('content')
<div class="wrapper register-block">
    <div class="container">
        <div class="row">
            <div class="col-xs-offset-1 col-xs-10 col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6">
                <h1>Регистрация</h1>
                <hr class="light-line">
                <form method="POST" action="{{ url('/register') }}" class="ac-custom ac-checkbox ac-checkmark" autocomplete="off">
                    {!! csrf_field() !!}
                    <input type="text" name="name" placeholder="Ваше имя" value="{{ old('name') }}">
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                    <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    <input type="password" name="password" placeholder="Пароль" value="{{ old('password') }}">
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    <input type="password" name="password_confirmation" placeholder="Подтвердить пароль" value="{{ old('password_confirmation') }}">
                    <span class="help-block">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                    <button type="submit">Создать аккаунт</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
