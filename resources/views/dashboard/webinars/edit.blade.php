@extends('dashboard.layout')
@section('content')
<h1>Редактирование вебинара</h1>
<form action="/dashboard/webinars/{{ $webinar->id }}" method="POST">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
        <label for="name" class="control-label">Название:</label>
        <span class="help-block">{{ $errors->first('name') }}</span>
        <input type="text" id="name" name="name" class="form-control" value="{{ old('name') ?? $webinar->name }}">
    </div>
    <div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
        <label for="description" class="control-label">Описание:</label>
        <span class="help-block">{{ $errors->first('description') }}</span>
        <textarea rows="10" id="description" name="description" class="form-control">{{ old('description') ?? $webinar->description }}</textarea>
    </div>
    <hr>
    <button class="btn btn-success pull-right">Применить</button>
</form>
@stop
