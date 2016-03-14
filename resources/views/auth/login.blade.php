@extends('layout')

@section('content')
<div class="wrapper login-block">
    <div class="container">
        <div class="row">
            <div class="col-xs-offset-1 col-xs-10 col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6">
                <h1>Авторизация</h1>
                <hr class="light-line">
                <form method="POST" action="{{ url('/login') }}" class="ac-custom ac-checkbox ac-checkmark" autocomplete="off">
                    {!! csrf_field() !!}
                    <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    <input type="password" name="password" placeholder="Пароль" value="{{ old('password') }}">
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    <ul>
                        <li><input id="cb6" name="cb6" type="checkbox"><label for="cb6">Запомнить меня</label></li>
                    </ul>
                    <button type="submit">Login</button>
                    <span class="reset-password-span">
                        <a class="btn btn-link reset-password" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                    </span>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
