@extends("layout")
@section("content")
<div class="Page">
    <div class="Page__content Page__content--transparent">
        <h1 class="Page__heading Page__heading--yellow">Статьи
        @if (Request::is('posts/category/*'))
        из категории: <span class='filter-name'>{{ $name }}</span>
        @elseif (Request::is('posts/tag/*'))
        с тегом: <span class='filter-name'>{{ $name }}</span>
        @endif
        </h1>
        @include('partials.search', ['class' => '', 'searchUrl'=> '/posts/?/search', 'resetUrl' => '/posts', 'placeholder' => 'искать статьи'])
        @include('partials.filters')
        <div class="Gallery">
            @forelse ($posts as $post)
            <div>
                <div class="resource Post">
                    <img src="/uploads/images/posts/small/{{ $post->image }}" class="img-responsive Post__image" alt="Статья 1">
                    <div class="Post__info">
                        <h3 class="Post__heading">{{ $post->name }}</h3>
                        <p class="Post__content">{{ str_limit($post->content, 150) }}</p>
                        <div class="Post__meta">
                            <span class="post__date">{{ $post->published_at->format('m.d.y') }}</span>
                            <span class="post__rating">{{ $post->averageRating }}</span>
                        </div>
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
