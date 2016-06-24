<div class="section section-orange" id="lectures-section">
    <div class="container">
        <h2>Лекции</h2>
        @forelse ($lectures as $lecture)
        <div class="row Video">
                <div class="four columns">
                    <img class="thumb" src="img/{{ $lecture->img }}">
                </div>
                <div class="eight columns">
                    <h5 class="Video__heading">{{ $lecture->title }}</h5>
                    <div class="Video__description">{!! str_limit($lecture->description, 200) !!}</div>
                    <a href="/video/{{ $lecture->id }}" class="button Video__button Video__button--lecture">Смотреть</a>
                <div style="clear: both"></div>
                </div>
        </div>
        @empty
            На данный момент лекций нет
        @endforelse
    </div>
</div>
