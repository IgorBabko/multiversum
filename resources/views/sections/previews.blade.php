<div class="section section-purple" id="previews-section">
    <div class="container">
        <h2>Видео анонсы</h2>
        @forelse ($videos as $video)
        <div class="Video">
            <h4 class="Video__heading">{{ $video->title }}</h4>
            <div class="Video__description">{{ $video->description }}</div>
            <a href="/video/{{ $video->id }}" class="button Video__button">Смотреть</a>
        </div>
        @empty На данный момент видео анонсов нет @endforelse
    </div>
</div>
