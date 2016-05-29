<div class="section section-orange" id="lectures-section">
    <div class="container">
        <h2>Лекции</h2>
        @forelse ($lectures as $lecture)
        <div class="Video">
            <h4 class="Video__heading">{{ $lecture->title }}</h4>
            <div class="Video__description">{{ $lecture->description }}</div>
            <a href="/video/{{ $lecture->id }}" class="button Video__button">Смотреть</a>
        </div>
        @empty
            На данный момент лекций нет
        @endforelse
    </div>
</div>
