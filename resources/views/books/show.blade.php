@extends("layout")
@section("content")
<div class="Page Page-light">
    <div class="Page__content Page-light__content">
        <div class="Book-expanded">
            <h1 class="Page__heading Page-light__heading">{{ $book->name }}</h1>
            <div class="Book-expanded__date">Дата публикации: {{ $book->published_at->format('m.d.Y') }}</div>
            <div class="Book-expanded__wrapper">
                <img src="{{ $book->thumbnail }}" class="Book-expanded__image" alt="{{ $book->name }}">
                <br>
                <button class="btn buy-button Book-expanded__buy">Купить</button>
            </div>
            <div class="Book-expanded__description">{!! $book->description !!}</div>
        </div>
    </div>
</div>
@include('partials.comments', ['resource' => $book])
@endsection
