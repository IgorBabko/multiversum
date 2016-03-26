@extends("layout")
@section("content")
<div class="Page">
    <div class="Page__content Page__content--with-resource">
        <h1 class="Page__heading">Вебинары</h1>
        @include('partials.search', ['resource' => $webinars, 'searchUrl'=> '/webinars/?/search', 'resetUrl' => '/webinars'])
        <div class="Gallery">
            @forelse ($webinars as $webinar)
            <div>
                <div class="resource Video">
                    <a href="/webinars/{{ $webinar->slug }}" class="Video__link">
                        <div>
                            <div class="Overlay">
                                <span class="glyphicon glyphicon-play" aria-hidden="true"></span>
                            </div>
                            <img src="{{ $webinar->thumbnail }}" class="Video__image">
                        </div>
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
