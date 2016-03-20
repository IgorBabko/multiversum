@extends("layout")
@section("content")
<div class="Page">
    <div class="Page__content">
        <h1 class="Page__heading">Книги</h1>
        @include('partials.search')
        <div class="Gallery">
            @forelse ($books as $book)
            <div>
                <div class="Book">
                    <a href="/books/{{ $book->slug }}" class="Book__link">
                        <div class="Book__overlay">
                            <span class="glyphicon glyphicon-play" aria-hidden="true"></span>
                        </div>
                        <img src="http://placehold.it/220x250" class="Book__thumb">
                        <h3 class="Book__heading">{{ $book->name }}</h3>
                    </a>
                </div>
            </div>
            @empty
            Книг нет
            @endforelse
        </div>
        <div class="col-xs-12 pagination-block">
            {!! $books->links() !!}
        </div>
    </div>
</div>
@endsection
