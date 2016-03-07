@extends("layout")
@section("content")
<div class="page-content posts-content posts-wrapper">
    <div class="container posts">
        <div class="row">
            <div class="col-md-12">
                <h1>Статьи</h1>
                @include('partials.search')
            </div>
        </div>
        <div class="row filters">
            <div class="col-md-6">
                <!-- <h4>Категории</h4> -->
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
                <!-- <h4>Теги</h4> -->
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
        </div>
        <div class="row centered">
            @forelse ($posts as $post)
            <div class="post col-md-4 col-sm-6 col-xs-12">
                <img src="http://placehold.it/400x250" class="img-responsive post-thumbnail" alt="Статья 1">
                <div class="post-info">
                    <h3>{{ $post->name }}</h3>
                    <p class="short-content">{{ str_limit($post->content, 150) }}</p>
                    <p class="post-meta-info">{{ $post->published_at->format('m.d.Y') }}</p>
                    <button class="btn btn-primary">Читать</button>
                </div>
            </div>
            @empty
            Статей нет
            @endforelse
        </div>
        <div class="row">
            <div class="col-xs-12 pagination-block">
                {!! $posts->links() !!}
            </div>
        </div>
    </div>
</div>
@endsection
