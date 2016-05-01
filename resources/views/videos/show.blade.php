@extends("layout")
@section("content")
<div class="Page">
    <div class="Page__content Page__content--with-resource">
        <div>
            <div class="Iframe">
                <img class="Iframe__ratio" src="http://placehold.it/16x9"/>
                {!! $video->iframe !!}
            </div>
            <div class="padding">
                <h1 class="Page__heading Page__heading--blue">{{ $video->name }}</h1>
                <span class="Video-expanded__date">
                    Дата публикации: {{ $video->published_at->format('m.d.Y') }}
                </span>
                <div class="Page__text">
                    {!! $video->description !!}
                </div>
            </div>
        </div>
    </div>
</div>
@include('partials.comments', ['resource' => $video])
@endsection
