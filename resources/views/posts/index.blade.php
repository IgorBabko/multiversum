@extends("layout")
@section("content")
<div class="video-content video-block-wrapper">
    <div class="container video-block">
        <div class="row">
            <div class="col-md-12">
                <h1>Статьи</h1>
                @include('partials.search')
            </div>
        </div>
        <div class="row filters">
            <div class="col-md-6">
                <!-- <h4>Категории</h4> -->
                <select class="selectpicker" title="Выбор категории" data-size="5" multiple >
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
            <div class="col-md-4 col-sm-6">
                <div class="video">
                    <img src="http://placehold.it/300x250">
                    <div class="caption">
                        <div>{{ str_limit($post->content, 150) . '...' }}</div>
                        <i class="fa fa-play"></i>
                    </div>
                </div>
                <div class="meta-info">
                    <span class="name">{{ $post->name }}</span>
                    <span class="date">{{ $post->published_at->format('m.d.Y') }}</span>
                </div>
            </div>
            @empty
            Статей нет
            @endforelse
            <div class="col-xs-12 pagination-block">
                {!! $posts->links() !!}
            </div>
        </div>
    </div>
</div>
@endsection
