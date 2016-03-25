@extends("layout")
@section("content")
<header class="header">
    <h1 class="header__heading">Человек как бесконечность</h1>
    <h2 class="header__quote">Здесь можно написать цитату</h2>
    <div class="header__arrow"><i class="fa fa-angle-double-down"></i></div>
</header>
<div class="Section Section--is-purple">
    <h1 class="Section__heading">Недавние вебинары</h1>
    <div class="Gallery">
        @foreach ($webinars as $webinar)
        <div>
            <div class="resource Video">
                <a href="/webinars/{{ $webinar->slug }}" class="Video__link">
                    <div class="Video__overlay">
                        <span class="glyphicon glyphicon-play" aria-hidden="true"></span>
                    </div>
                    <img src="{{ $webinar->thumbnail }}" class="Video__thumb">
                    <h3 class="Video__heading">{{ $webinar->name }}</h3>
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
                <img src="{{ $post->thumbnail }}" class="img-responsive Post__thumb" alt="Статья 1">
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
                <a href="/disks/{{ $book->slug }}" class="Book__link">
                    <div class="Book__overlay">
                        <span class="glyphicon glyphicon-play" aria-hidden="true"></span>
                    </div>
                    <img src="{{ $book->thumbnail }}" class="Book__thumb">
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
                    <div class="Disk__overlay">
                        <span class="glyphicon glyphicon-play" aria-hidden="true"></span>
                    </div>
                    <img src="{{ $disk->thumbnail }}" class="Disk__thumb">
                    <h3 class="Disk__heading">{{ $disk->name }}</h3>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@include('partials.session')
@endsection
