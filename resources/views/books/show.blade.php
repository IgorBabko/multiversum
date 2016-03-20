@extends("layout")
@section("content")
<div class="Page Page-light">
    <div class="Page__content Page-light__content">
        <div class="Book-expanded">
            <h1 class="Page__heading Page-light__heading">{{ $book->name }}</h1>
            <img src="http://placehold.it/200x270" class="Page__image" alt="{{ $book->name }}">
            <button class="btn buy-button">Купить</button>
            <div class="Book-expanded__description">{!! $book->description !!}</div>
            <div class="Book-expanded__date">Дата публикации: {{ $book->published_at->format('m.d.Y') }}</div>
        </div>
    </div>
</div>
@include('partials.comments', ['resource' => $book])
@endsection
