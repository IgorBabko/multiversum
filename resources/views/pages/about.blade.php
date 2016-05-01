@extends('layout')
@section('content')
<div class="Page">
    <div class="Page__content Page__content--with-padding">
        <h1 class="Page__heading">{{ $page->heading }}</h1>
        <img src="/img/background.jpg" class="Page__image Page__image--avatar" alt="мой фото">
        <div class="Page__text">
            {!! $page->text !!}
        </div>
    </div>
</div>
@stop
