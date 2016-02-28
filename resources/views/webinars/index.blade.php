@extends("layout")
@section("content")
<div class="video-content video-block-wrapper">
    <div class="container video-block">
        <div class="row">
            <div class="col-md-12">
                <h1>Вебинары</h1>
                <!-- <hr class="light-line"> -->
                <div class="search">
                    <input type="text" class="search" placeholder="поиск">
                    <i class="fa fa-search"></i>
                </div>
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
                <h3>{{ $webinar->name }}</h3>
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
