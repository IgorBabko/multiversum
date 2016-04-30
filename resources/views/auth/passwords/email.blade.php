@extends('layout')

@section('content')
<div class="Page">
    <div class="Page__content Page__content--center">
        @include('partials.session')
        <form method="POST" action="{{ url('/password/email') }}" autocomplete="off">
            <h1 class="Page__heading Page__heading--center">Сброс пароля</h1>
            {!! csrf_field() !!}
            <span class="help-block error">
                {{ $errors->first('email') }}
            </span>
            <input type="email" name="email" placeholder="Ваш e-mail" class="Input {{ $errors->first('email') ? 'error' : '' }}" value="{{ old('email') }}">
            <button type="submit" class="Button">Далее</button>
        </form>
    </div>
</div>
@endsection
