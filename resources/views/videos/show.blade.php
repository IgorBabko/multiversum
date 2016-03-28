@extends("layout")
@section("content")
<div class="Page Page-light">
    <div class="Page__content Page-light__content Page__content--with-resource">
        <h1 class="Page__heading Page-light__heading">{{ $video->name }}</h1>
        <div class="Video-expanded">
            <div class="Video-expanded__date">
                Дата публикации: {{ $video->published_at->format('m.d.Y') }}
            </div>
            <div class="Iframe">
                <img class="Iframe__ratio" src="http://placehold.it/16x9"/>
                {!! $video->iframe !!}
            </div>
            <p class="Video-expanded__description">
                {!! $video->description !!}
            </p>
        </div>
    </div>
</div>
@include('partials.comments', ['resource' => $video])
@endsection
