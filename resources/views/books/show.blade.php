@extends("layout")
@section("content")
<div class="book-content page-content books-wrapper">
    <div class="container">
        <div class="row">
            <h1>{{ $book->name }}</h1>
            <div class="book-wrapper col-xs-12 col-md-3">
                <img src="http://placehold.it/200x270" alt="Книга 1">
                <br>
                <button class="btn buy-button">Купить</button>
            </div>
            <div class="col-xs-12 col-md-9">
                <p>{!! $book->description !!}</p>
                <span>Дата публикации: {{ $book->published_at->format('m.d.Y') }}</span>
            </div>
        </div>
    </div>
</div>
@endsection
