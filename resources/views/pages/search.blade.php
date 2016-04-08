@extends("layout")
@section("content")
<div class="Page">
    <div class="Page__content Page__content--with-resource">
        <h1 class="Page__heading">Результаты поиска</h1>
        @include('partials.search', ['class' => '', 'searchUrl'=> '/?/search', 'resetUrl' => '/'])
        <div class="Gallery">
            @if (count($posts))
            <h1 class="Page__heading Page__heading--sub">Вебинары</h1>
            @endif
            @foreach ($videos as $video)
            <div>
                <div class="resource Video">
                    <a href="/videos/{{ $video->slug }}" class="Video__link">
                        <div style="margin-left: -15px">
                            <div class="Overlay">
                                <span class="glyphicon glyphicon-play" aria-hidden="true"></span>
                            </div>
                            <img src="{{ $video->image }}" class="Video__image">
                        </div>
                        <h3 class="Video__heading">{{ $video->name }}</h3>
                    </a>
                </div>
            </div>
            @endforeach
            @if (count($posts))
            <h1 class="Page__heading Page__heading--sub">Книги</h1>
            @endif
            @foreach ($books as $book)
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
            @endforeach
            @if (count($posts))
            <h1 class="Page__heading Page__heading--sub">Диски</h1>
            @endif
            @foreach ($disks as $disk)
            <div>
                <div class="resource Disk">
                    <a href="/disks/{{ $disk->slug }}" class="Disk__link">
                        <div class="Overlay">
                            <span class="glyphicon glyphicon-record" aria-hidden="true"></span>
                        </div>
                        <img src="/uploads/images/disks/{{ $disk->image }}" class="Disk__image">
                        <h3 class="Disk__heading">{{ $disk->name }}</h3>
                    </a>
                </div>
            </div>
            @endforeach
            @if (count($posts))
            <h1 class="Page__heading Page__heading--sub">Статьи</h1>
            @endif
            @foreach ($posts as $post)
            <div>
                <div class="resource Post">
                    <img src="/uploads/images/posts/small/{{ $post->image }}" class="img-responsive Post__image" alt="Статья 1">
                    <div class="Post__info">
                        <h3 class="Post__heading">{{ $post->name }}</h3>
                        <p class="Post__content">{{ str_limit($post->content, 150) }}</p>
                        <p class="Post__meta">{{ $post->published_at->format('m.d.Y') }}</p>
                        <a href="/posts/{{ $post->slug }}">
                            <button class="btn btn-primary Post__button">Читать</button>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
