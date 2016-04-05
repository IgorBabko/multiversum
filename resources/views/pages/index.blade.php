@extends("layout")
@section("content")
<header class="header">
    @include('partials.search', ['class' => 'search__main', 'searchUrl'=> '/videos/?/search', 'resetUrl' => '/videos'])
    <div class="Iframe header__iframe">
        <img class="header__iframe__ratio" src="http://placehold.it/16x9"/>
        {!! $headerVideo->iframe !!}
    </div>
    <h1 class="header__heading">{{ $page->heading }}</h1>
    {{ $page->text }}
</header>
<div class="Section Section--is-purple">
    <h1 class="Section__heading">Недавние видео анонсы</h1>
    <div class="Gallery">
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
    </div>
</div>
<div class="Section">
    <h1 class="Section__heading">Свежие статьи</h1>
    <div class="Gallery">
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
<div class="Section Section--is-purple">
    <h1 class="Section__heading">Новые книги</h1>
    <div class="Gallery">
        @foreach($books as $book)
        <div>
            <div class="resource Book">
                <a href="/books/{{ $book->slug }}" class="Book__link">
                    <div class="Overlay">
                        <span class="glyphicon glyphicon-play" aria-hidden="true"></span>
                    </div>
                    <img src="/uploads/images/books/{{ $book->image }}" class="Book__image">
                    <h3 class="Book__heading">{{ $book->name }}</h3>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>
<div class="Section">
    <h1 class="Section__heading">Новые диски</h1>
    <div class="Gallery">
        @foreach($disks as $disk)
        <div>
            <div class="resource Disk">
                <a href="/disks/{{ $disk->slug }}" class="Disk__link">
                    <div class="Overlay">
                        <span class="glyphicon glyphicon-play" aria-hidden="true"></span>
                    </div>
                    <img src="/uploads/images/disks/{{ $disk->image }}" class="Disk__image">
                    <h3 class="Disk__heading">{{ $disk->name }}</h3>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
