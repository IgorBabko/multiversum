@extends("layout")
@section("content")
<div class="Page Page-light">
    <div class="Page__content Page-light__content">
        <div class="Disk-expanded">
            <h1 class="Page__heading Page-light__heading">{{ $disk->name }}</h1>
            <div class="Disk-expanded__date">Дата публикации: {{ $disk->published_at->format('m.d.Y') }}</div>
            <div class="Disk-expanded__wrapper">
                <img src="{{ $disk->thumbnail }}" class="Disk-expanded__image"  alt="{{ $disk->name }}">
                <br>
                <button class="btn Disk-expanded__buy">Купить</button>
            </div>
            <div class="Disk-expanded__description">{!! $disk->description !!}</div>
        </div>
    </div>
</div>
@include('partials.comments', ['resource' => $disk])
@endsection
