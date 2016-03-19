@extends('layout')
@section('content')
<div class="Page">
    <div class="Page__content email">
        <form action="/email" method="POST" autocomplete="off">
            <h1 class="Page__heading">Отправить письмо</h1>
            {!! csrf_field() !!}
            <span class="help-block error">
                {{ $errors->first('name') }}
            </span>
            <input type="text" name="name" placeholder="Имя" class="Input {{ $errors->first('name') ? 'error' : '' }}" value="{{ old('name') }}">
            <span class="help-block error">
                {{ $errors->first('email') }}
            </span>
            <input type="email" name="email" placeholder="Email" class="Input {{ $errors->first('email') ? 'error' : '' }}" value="{{ old('email') }}">
            <span class="help-block error">
                {{ $errors->first('message') }}
            </span>
            <textarea name="message" placeholder="Сообщение" class="Textarea"></textarea>
            <button type="submit" class="Button">Отправить</button>
        </form>
    </div>
</div>
@stop
