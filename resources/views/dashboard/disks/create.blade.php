@extends('dashboard.layout')
@section('content')
<h1>Добавление диска</h1>
<form action="/dashboard/disks" method="POST">
    {{ csrf_field() }}
    <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
        <label for="name" class="control-label">Название:</label>
        <span class="help-block">{{ $errors->first('name') }}</span>
        <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}">
    </div>
    <div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
        <label for="description" class="control-label">Описание:</label>
        <span class="help-block">{{ $errors->first('description') }}</span>
        <textarea rows="10" id="description" name="description" class="form-control">
            {{ old('description') }}
        </textarea>
    </div>
    <div class="form-group {{ $errors->has('price') ? 'has-error' : ''}}">
        <label for="price" class="control-label">Цена:</label>
        <span class="help-block">{{ $errors->first('price') }}</span>
        <input type="text" rows="10" id="price" name="price" class="form-control" value="{{ old('price') }}">
    </div>
    <label for="file">Загрузить файл:</label><br>
    <span class="btn btn-default btn-file">
        Выбрать <input id="file" name="file" type="file">
    </span>
    <br>
    <hr>
    <button class="btn btn-success pull-right">Добавить</button>
</form>
@stop
