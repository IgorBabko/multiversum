<div class="section section-purple" id="previews-section">
    <div class="container">
        <h2>Видео анонсы</h2>
        @forelse ($previews as $preview)
        <div class="row Video">
                <div class="four columns">
                    <img class="thumb" src="img/{{ $preview->img }}">
                </div>
                <div class="eight columns">
                    <h5 class="Video__heading">{{ $preview->title }}</h5>
                    <div class="Video__description">{!! str_limit($preview->description, 200) !!}</div>
                    <a href="/video/{{ $preview->id }}" class="button Video__button">Смотреть</a>
                <div style="clear: both"></div>
            </div>
        </div>
        @empty
            На данный момент видео анонсов нет
        @endforelse
    </div>
</div>
