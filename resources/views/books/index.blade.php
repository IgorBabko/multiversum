@extends("layout")
@section("content")
<div class="books-content page-content books-wrapper">
    <div class="container books-block">
        <div class="row">
            <div class="col-md-12">
                <h1>Книги</h1>
                @include('partials.search')
            </div>
        </div>
        <div class="row centered">
            @forelse ($books as $book)
            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                <div class="book">
                    <img src="http://placehold.it/200x270" alt="Книга 1">
                    <div class="caption">
                        <div>{{ str_limit($book->description, 150) }}</div>
                        <!-- <i class="fa fa-play"></i> -->
                    </div>
                </div>
                <div class="item-info">
                    <h3>{{ $book->name }}</h3>
                </div>
            </div>
            @empty
            Книг нет
            @endforelse
            <div class="col-xs-12 pagination-block">
                {!! $books->links() !!}
            </div>
        </div>
    </div>
</div>
@endsection
