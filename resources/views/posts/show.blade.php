@extends("layout")
@section("content")
<div class="Page">
    <div class="Page__filters">
    @include ('partials.search', ['class' => '', 'searchUrl' => '/posts/?/search', 'resetUrl' => '/posts', 'placeholder' => 'искать статьи'])
    @include ('partials.filters')
    </div>
    <div class="Page__content Page__content--with-padding">
        <div>
            <h1 class="Page__heading">{{ $post->name }}</h1>
            <div class="Post-expanded__date">Дата публикации: {{ $post->published_at->format('m.d.Y') }}</div>
            <img src="/uploads/images/posts/large/{{ $post->image }}" class="Post-expanded__image" alt="Статья 1">
            <div class="Page__text">{!! $post->content !!}</div>
        </div>
    </div>
</div>
@include('partials.comments', ['resource' => $post])
@endsection
