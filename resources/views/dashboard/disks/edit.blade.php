@extends('dashboard.layout')
@section('content')
<h1>Редактирование диска</h1>
<form action="/dashboard/disks/{{ $disk->id }}" method="POST">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
        <label for="name" class="control-label">Название:</label>
        <span class="help-block">{{ $errors->first('name') }}</span>
        <input type="text" id="name" name="name" class="form-control" value="{{ old('name') ?? $disk->name }}">
    </div>
    <div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
        <label for="description" class="control-label">Описание:</label>
        <span class="help-block">{{ $errors->first('description') }}</span>
        <textarea rows="10" id="description" name="description" class="form-control">{{ old('description') ?? $disk->description }}</textarea>
    </div>
    <div class="form-group {{ $errors->has('price') ? 'has-error' : ''}}">
        <label for="price" class="control-label">Цена:</label>
        <span class="help-block">{{ $errors->first('price') }}</span>
        <input type="text" rows="10" id="price" name="price" class="form-control" value="{{ old('price') ?? $disk->price }}">
    </div>
    <hr>
    <button class="btn btn-success pull-right">Применить</button>
</form>
@stop
