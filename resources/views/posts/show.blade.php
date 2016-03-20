@extends("layout")
@section("content")
<div class="Page Page-light">
    <div class="Page__content Page-light__content">
        <h1 class="Page__heading Page-light__heading">{{ $post->name }}</h1>
        <div class="Post--expanded">
            <div class="Post-expanded__date">Дата публикации: {{ $post->published_at->format('m.d.Y') }}</div>
            <img src="http://placehold.it/500x500" class="Post-expanded__image" alt="Статья 1">
            <div class="Post-expanded__info">
                <p class="Post-expanded__description">{!! $post->content !!}</p>
            </div>
        </div>
    </div>
</div>
@include('partials.comments', ['resource' => $post])
@endsection
