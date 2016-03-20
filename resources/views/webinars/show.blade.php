@extends("layout")
@section("content")
<div class="Page Page-light">
    <div class="Page__content Page-light__content">
        <h1 class="Page__heading Page-light__heading">{{ $webinar->name }}</h1>
        <div class="Video-expanded">
            <div class="Video-expanded__date">
                Дата публикации: {{ $webinar->published_at->format('m.d.Y') }}
            </div>
            <div class="Iframe">
                <img class="Iframe__ratio" src="http://placehold.it/16x9"/>
                {!! $webinar->iframe !!}
            </div>
            <p class="Video-expanded__description">
                {!! $webinar->description !!}
            </p>
        </div>
    </div>
</div>
@include('partials.comments', ['resource' => $webinar])
@endsection
