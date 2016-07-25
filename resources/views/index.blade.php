@extends('layout')

@section('content')
    @include ('sections.main')
    @include ('sections.categories')
    @include ('sections.livestream')
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
