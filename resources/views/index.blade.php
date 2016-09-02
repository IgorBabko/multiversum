@extends('layout')

@section('content')
    @include ('sections.categories')
    {{-- @include ('sections.main') --}}
    {{-- @include ('sections.about') --}}
    @if ( Auth::user() && Auth::user()->paidForWebinars )
        @include ('sections.webinars')
    @endif
    @if (Auth::user() && Auth::user()->paidForLectures)
        @include ('sections.lectures')
    @endif
    @include ('sections.previews')
    {{-- @else --}}
        {{-- @include ('sections.payment', ['item' => 'вебинарам', 'callbackUrl' => 'https://multiversum.in.ua/paymentForWebinars' ]) --}}
    {{-- @endif --}}
    {{-- @if ( Auth::user() && Auth::user()->paidForLectures ) --}}
    {{-- @else --}}
        {{-- @include ('sections.payment', ['item' => 'видео-лекциям', 'callbackUrl' => 'https://multiversum.in.ua/paymentForLectures' ]) --}}
    {{-- @endif --}}
    {{-- @if (! Auth::user()) --}}
        {{-- @include ('sections.payment', ['item' => 'видео-лекциям', 'callbackUrl' => 'https://multiversum.in.ua/paymentForLectures' ]) --}}
    {{-- @endif --}}
    @include ('sections.books')
    @include ('sections.email')
    @include ('modals.index')
@stop
