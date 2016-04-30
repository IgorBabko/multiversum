@extends("layout")
@section("content")
<div class="Page">
    <div class="Page__content Page__content--transparent">
        <h1 class="Page__heading Page__heading--yellow">Видео анонсы</h1>
        @include('partials.search', ['class' => '', 'searchUrl'=> '/videos/?/search', 'resetUrl' => '/videos', 'placeholder' => 'искать видео анонсы'])
        <div class="Gallery">
            @forelse ($videos as $video)
            <div>
                <div class="resource Video">
                    <a href="/videos/{{ $video->slug }}" class="Video__link">
                        <div style="margin-left: -15px">
                            <div class="Overlay">
                                <span class="glyphicon glyphicon-play" aria-hidden="true"></span>
                            </div>
                            <img src="{{ $video->image }}" class="Video__image">
                        </div>
                        <h3 class="Video__heading">{{ $video->name }}</h3>
                    </a>
                </div>
            </div>
            @empty
            Вебинаров нет
            @endforelse
        </div>
        <div class="pagination-block">
            {!! $videos->links() !!}
        </div>
    </div>
</div>
@endsection
