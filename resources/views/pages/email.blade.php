@extends('layout')
@section('content')
<div class="wrapper email-block page-content">
    <div class="content">
        <form action="/email" method="POST" autocomplete="off">
            <h1>Отправить письмо</h1>
            {!! csrf_field() !!}
            <span class="help-block error">
                {{ $errors->first('name') }}
            </span>
            <input type="text" name="name" placeholder="Имя" class="{{ $errors->first('name') ? 'error' : '' }}" value="{{ old('name') }}">
            <span class="help-block error">
                {{ $errors->first('email') }}
            </span>
            <input type="email" name="email" placeholder="Email" class="{{ $errors->first('email') ? 'error' : '' }}" value="{{ old('email') }}">
            <span class="help-block error">
                {{ $errors->first('message') }}
            </span>
            <textarea name="message" placeholder="Сообщение"></textarea>
            <button type="submit">Отправить</button>
        </form>
    </div>
</div>
@stop
