@extends("layout")
@section("content")
<div class="Page">
    @include ('partials.search', ['class' => '', 'searchUrl' => '/books/?/search', 'resetUrl' => '/books', 'placeholder' => 'искать книги'])
    <div class="Page__content Page__content--with-padding">
        <div class="Book-expanded">
            <h1 class="Page__heading">{{ $book->name }}</h1>
            <div class="Book-expanded__date">Дата публикации: {{ $book->published_at->format('m.d.Y') }}</div>
            <img src="/uploads/images/books/{{ $book->image }}" class="Page__image Page__image--book" alt="{{ $book->name }}">
            <div class="Page__text">{!! $book->description !!}</div>
        </div>
    </div>
</div>
@include('partials.comments', ['resource' => $book])
@endsection
