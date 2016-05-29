@extends('layout')

@section('content')
    @include ('sections.main')
    @include ('sections.about')
    @include ('sections.previews')
    @if (Auth::check())
        @include ('sections.lectures')
    @else
        @include ('sections.account')
    @endif
    @include ('sections.email')
    @include ('partials.footer')
    @include ('modals.index')
@stop
