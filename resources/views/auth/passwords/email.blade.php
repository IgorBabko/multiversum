@extends('layout')

<!-- Main Content -->
@section('content')
<div class="wrapper email-reset-block page-content">
    <div class="container">
        <div class="row">
            <div class="col-xs-offset-1 col-xs-10 col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6">
                <h1>Сброс пароля</h1>
                <hr class="light-line">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <form method="POST" action="{{ url('/password/email') }}">
                    {!! csrf_field() !!}
                    <span class="help-block error">
                        {{ $errors->first('email') }}
                    </span>
                    <input type="email" name="email" placeholder="Email" class="{{ $errors->first('email') ? 'error' : '' }}" value="{{ old('email') }}">
                    <button type="submit">Отправить письмо сброса пароля</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
