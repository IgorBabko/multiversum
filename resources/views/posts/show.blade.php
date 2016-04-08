@extends("layout")
@section("content")
<div class="Page Page-light">
    <div class="Page__content Page-light__content Page__content--with-resource">
        <div class="Post-expanded">
            @include('partials.search', ['class' => '', 'searchUrl'=> '/posts/?/search', 'resetUrl' => '/posts'])
            @include('partials.filters')
            <h1 class="Page__heading Page-light__heading">{{ $post->name }}</h1>
            <div class="Post-expanded__date">Дата публикации: {{ $post->published_at->format('m.d.Y') }}</div>
            <img src="/uploads/images/posts/large/{{ $post->image }}" class="Post-expanded__image" alt="Статья 1">
            <div class="Post-expanded__description">{!! $post->content !!}</div>
        </div>
    </div>
</div>
@include('partials.comments', ['resource' => $post])
@endsection
