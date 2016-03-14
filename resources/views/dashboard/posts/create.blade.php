@extends('dashboard.layout')
@section('content')
<h1>Добавление статьи</h1>
<form action="/dashboard/posts" method="POST">
    {{ csrf_field() }}
    <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
        <label for="name" class="control-label">Название:</label>
        <span class="help-block">{{ $errors->first('name') }}</span>
        <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}">
    </div>
    <div class="form-group {{ $errors->has('content') ? 'has-error' : ''}}">
        <label for="content" class="control-label">Описание:</label>
        <span class="help-block">{{ $errors->first('content') }}</span>
        <textarea rows="10" id="content" name="content" class="form-control">
            {{ old('content') }}
        </textarea>
    </div>
    <hr>
    <button class="btn btn-success pull-right">Добавить</button>
</form>
@stop
