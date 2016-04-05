@extends('layout')
@section('content')
<div class="Page">
    <div class="Page__content about">
        <h1 class="Page__heading">{{ $page->heading }}</h1>
        <img src="/uploads/images/pages/{{ $page->image }}" class="img-responsive img-circle about__avatar" alt="мой аватар">
        <div class="about__bio">
            {!! $page->text !!}
        </div>
    </div>
</div>
@stop
