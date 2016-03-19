@extends("layout")
@section("content")
<div class="Page">
    <div class="Page__content post">
        <h1 class="Page__heading">{{ $post->name }}</h1>
        <div class="Post--expanded">
            <img src="http://placehold.it/500x500" class="Post__image" alt="Статья 1">
            <div class="Post__info">
                <p class="Post__description">{!! $post->content !!}</p>
                <span class="Post__date">Дата публикации: {{ $post->published_at->format('m.d.Y') }}</span>
            </div>
        </div>
    </div>
    </div>
    @include('partials.comments', ['resource' => $post])
@endsection
