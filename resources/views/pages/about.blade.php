@extends('layout')
@section('content')
<div class="Page Page-light">
    <div class="Page__content Page-light__content about">
        <h1 class="Page__heading Page-light__heading">{{ $page->heading }}</h1>
        <img src="/uploads/images/pages/{{ $page->image }}" class="img-responsive img-circle about__avatar" alt="мой аватар">
        <div class="about__bio">
            {!! $page->text !!}
        </div>
    </div>
</div>
@stop
