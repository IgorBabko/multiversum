@extends("layout")
@section("content")
<div class="Page Page--light">
    <div class="Page__content Page--light__content Page__content--with-resource">
        <div class="Video-expanded">
            <div class="Video-expanded__date">
                Дата публикации: {{ $video->published_at->format('m.d.Y') }}
            </div>
            <div class="Iframe">
                <img class="Iframe__ratio" src="http://placehold.it/16x9"/>
                {!! $video->iframe !!}
            </div>
            <div class="Video-expanded__description">
                <h1 class="Page__heading Page__heading--blue">{{ $video->name }}</h1>
                {!! $video->description !!}
            </div>
        </div>
    </div>
</div>
@include('partials.comments', ['resource' => $video])
@endsection
