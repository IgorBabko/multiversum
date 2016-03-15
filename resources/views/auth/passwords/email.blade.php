@extends('layout')

<!-- Main Content -->
@section('content')
<div class="wrapper email-reset-block page-content">
    <div class="content">
        @if (session('status'))
            <div class="success-alert">
                {{ session('status') }}
            </div>
        @endif
        <form method="POST" action="{{ url('/password/email') }}" autocomplete="off">
            <h1>Сброс пароля</h1>
            <!-- <hr class="light-line"> -->
            {!! csrf_field() !!}
            <span class="help-block error">
                {{ $errors->first('email') }}
            </span>
            <input type="email" name="email" placeholder="Ваш e-mail" class="{{ $errors->first('email') ? 'error' : '' }}" value="{{ old('email') }}">
            <button type="submit">Далее</button>
        </form>
    </div>
</div>
@endsection
