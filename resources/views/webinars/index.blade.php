@extends("layout")
@section("content")
<div class="video-content video-block-wrapper">
    <div class="container video-block">
        <div class="row">
            <div class="col-md-12">
                <h1>Вебинары</h1>
                @include('partials.search')
            </div>
        </div>
        <div class="row centered">
            @forelse ($webinars as $webinar)
            <div class="col-md-4 col-sm-6">
                <div class="video">
                    <img src="http://placehold.it/300x250">
                    <div class="caption">
                        <div>{{ $webinar->description }}</div>
                        <i class="fa fa-play"></i>
                    </div>
                </div>
                <div class="meta-info">
                    <span class="name">{{ $webinar->name }}</span>
                    <span class="date">{{ $webinar->date->format('m.d.Y') }}</span>
                </div>
            </div>
            @empty
            Вебинаров нет
            @endforelse
            <div class="col-xs-12 pagination-block">
                {!! $webinars->links() !!}
            </div>
        </div>
    </div>
</div>
@endsection
