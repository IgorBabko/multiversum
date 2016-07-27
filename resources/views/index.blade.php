@extends('layout')

@section('content')
    @include ('sections.categories')
    @include ('sections.main')
    @include ('sections.about')
    @include ('sections.previews')
    @if ( Auth::user() && Auth::user()->isPremium )
        @include ('sections.lectures')
    @else
        @include ('sections.payment')
    @endif
    @include ('sections.books')
    @include ('sections.email')
    @include ('modals.index')
@stop
