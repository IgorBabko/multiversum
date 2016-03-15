@extends('layout')

@section('content')
<div class="wrapper reset-password-block page-content">
    <div class="container">
        <div class="row">
            <div class="col-xs-offset-1 col-xs-10 col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6">
                <h1>Сброс пароля</h1>
                <hr class="light-line">
                    <form method="POST" action="{{ url('/password/reset') }}">
                        {!! csrf_field() !!}
                        <input type="hidden" name="token" value="{{ $token }}">
                        <input type="email" name="email" value="{{ $email or old('email') }}" placeholder="Email">
                        <input type="password" name="password" placeholder="Новый пароль">
                        <input type="password" name="password_confirmation" placeholder="Подтвердить пароль">
                        <button type="submit" class="btn btn-primary">Сбросить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
