@extends("layout")
@section("content")
<div class="Page">
    <div class="Page__content Page__content--with-resource">
        <h1 class="Page__heading">Статьи</h1>
        @include('partials.search', ['resource' => $posts, 'searchUrl'=> '/posts/?/search', 'resetUrl' => '/posts'])
        <!-- <div>
            <div class="col-md-6">
                <select class="selectpicker" title="Выбор категории" data-size="5">
                    <option>Mustard</option>
                    <option>Ketchup</option>
                    <option>Relish</option>
                    <option>Mustard</option>
                    <option>Ketchup</option>
                    <option>Relish</option>
                    <option>Mustard</option>
                    <option>Ketchup</option>
                </select>
            </div>
            <div class="col-md-6">
                <select class="selectpicker" title="Выбор тегов" data-size="5" data-selected-text-format="count > 3" multiple>
                    <option>Mustard</option>
                    <option>Ketchup</option>
                    <option>Relish</option>
                    <option>Mustard</option>
                    <option>Ketchup</option>
                    <option>Relish</option>
                    <option>Mustard</option>
                    <option>Ketchup</option>
                    <option>Relish</option>
                </select>
            </div>
        </div> -->
        <div class="Gallery">
            @forelse ($posts as $post)
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
