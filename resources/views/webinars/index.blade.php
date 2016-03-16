@extends("layout")
@section("content")
<div class="page-content">
    <div class="container">
        <div>
            <h1>Вебинары</h1>
            @include('partials.search')
        </div>
        <div class="Gallery">
            @forelse ($webinars as $webinar)
            <div>
                <div class="Video">
                    <a href="/webinars/{{ $webinar->slug }}">
                        <img src="http://placehold.it/270x220">
                        <div class="Video__meta">{{ $webinar->name }}<i class="fa fa-play pull-right"></i></div>
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
