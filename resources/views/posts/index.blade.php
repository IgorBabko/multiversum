@extends("layout")
@section("content")
<div class="Page">
    <div class="Page__content Page__content--with-resource">
        <h1 class="Page__heading">Статьи</h1>
        @include('partials.search', ['class' => '', 'searchUrl'=> '/posts/?/search', 'resetUrl' => '/posts'])
        <div class="filters">
            <select class="selectpicker Filter" title="Выбор категории" data-size="5">
                <option>Музыка</option>
                <option>Культура</option>
                <option>Живопись</option>
                <option>Спорт</option>
                <option>Технологии</option>
                <option>Наука</option>
                <option>Развлечения</option>
                <option>Кино</option>
            </select>
            <select class="selectpicker Filter" title="Выбор тега" data-size="5">
                <option>Город</option>
                <option>Море</option>
                <option>Медаль</option>
                <option>Ноутбук</option>
                <option>Шутка</option>
                <option>Фильм</option>
                <option>Вселенная</option>
            </select>
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
