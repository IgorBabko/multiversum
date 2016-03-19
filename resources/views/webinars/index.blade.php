@extends("layout")
@section("content")
<div class="Page">
    <div class="Page__content">
        <h1 class="Page__heading">Вебинары</h1>
        @include('partials.search')
        <div class="Gallery">
            @forelse ($webinars as $webinar)
            <div>
                <div class="Video">
                    <a href="/webinars/{{ $webinar->slug }}" class="Video__link">
                        <div class="Video__overlay">
                            <span class="glyphicon glyphicon-play" aria-hidden="true"></span>
                        </div>
                        <img src="http://placehold.it/270x220" class="Video__thumb">
                        <h3 class="Video__heading">{{ $webinar->name }}</h3>
                    </a>
                </div>
            </div>
            @empty
            Вебинаров нет
            @endforelse
        </div>
        <div class="pagination-block">
            {!! $webinars->links() !!}
        </div>
    </div>
</div>
@endsection
