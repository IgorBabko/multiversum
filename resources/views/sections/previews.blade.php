<div class="section section-purple" id="previews-section">
    <div class="container">
        <h2>Видео анонсы</h2>
        @forelse ($previews as $preview)
        <div class="Video">
            <h4 class="Video__heading">{{ $preview->title }}</h4>
            <div class="Video__description">{{ $preview->description }}</div>
            <a href="/video/{{ $preview->id }}" class="button Video__button">Смотреть</a>
        </div>
        @empty На данный момент видео анонсов нет @endforelse
    </div>
</div>
