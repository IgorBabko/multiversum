@extends("layout")
@section("content")
<div class="Page">
    <div class="Page__content Page__content--with-resource">
        <h1 class="Page__heading">Книги</h1>
        @include('partials.search', ['class' => '', 'searchUrl'=> '/books/?/search', 'resetUrl' => '/books'])
        <div class="Gallery">
            @forelse ($books as $book)
            <div>
                <div class="resource Book">
                    <a href="/books/{{ $book->slug }}" class="Book__link">
                        <div class="Overlay">
                            <span class="glyphicon glyphicon-book" aria-hidden="true"></span>
                        </div>
                        <img src="/uploads/images/books/{{ $book->image }}" class="Book__image">
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
