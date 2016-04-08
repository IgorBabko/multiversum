@extends("layout")
@section("content")
<div class="Page">
    <div class="Page__content Page__content--with-resource">
        <h1 class="Page__heading">Статьи
        @if (Request::is('posts/category/*'))
        из категории: <span class='filter-name'>{{ $name }}</span>
        @elseif (Request::is('posts/tag/*'))
        с тегом: <span class='filter-name'>{{ $name }}</span>
        @endif
        </h1>
        @include('partials.search', ['class' => '', 'searchUrl'=> '/posts/?/search', 'resetUrl' => '/posts'])
        <div class="filters">
            <div class="btn-group Filter">
                <a href="/posts">
                    <button class="btn btn-default">Все</button>
                </a>
            </div>
            <div class="btn-group Filter">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Категории <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    @foreach ($categories as $category)
                    <li><a href="/posts/category/{{ $category->name }}">{{ $category->name }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="btn-group Filter">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Теги <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    @foreach ($tags as $tag)
                    <li><a href="/posts/tag/{{ $tag->name }}">{{ $tag->name }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="Gallery">
            @forelse ($posts as $post)
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
            @empty
            Статей нет
            @endforelse
        </div>
        <div class="pagination-block">
            {!! $posts->links() !!}
        </div>
    </div>
</div>
@endsection
