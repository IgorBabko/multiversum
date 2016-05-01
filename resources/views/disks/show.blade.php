@extends("layout")
@section("content")
<div class="Page">
    @include ('partials.search', ['class' => '', 'searchUrl' => '/disks/?/search', 'resetUrl' => '/disks', 'placeholder' => 'искать диски'])
    <div class="Page__content Page__content--with-padding">
        <div>
            <h1 class="Page__heading">{{ $disk->name }}</h1>
            <div class="Disk-expanded__date">Дата публикации: {{ $disk->published_at->format('m.d.Y') }}</div>
                <img src="/uploads/images/disks/{{ $disk->image }}" class="Page__image Page__image"  alt="{{ $disk->name }}">
                <!-- <button class="btn Disk-expanded__buy">Купить</button> -->
            <div class="Page__text">{!! $disk->description !!}</div>
        </div>
    </div>
</div>
@include('partials.comments', ['resource' => $disk])
@endsection
