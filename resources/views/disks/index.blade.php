@extends("layout")
@section("content")
<div class="disks-content page-content disks-wrapper">
    <div class="container disks-block">
        <div class="row">
            <div class="col-md-12">
                <h1>Диски</h1>
                @include('partials.search')
            </div>
        </div>
        <div class="row centered">
            @forelse ($disks as $disk)
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <a href="/disks/{{ $disk->slug }}" class="disk">
                    <img src="http://placehold.it/250x250" alt="Книга 1">
                    <div class="caption">
                        <div>{!! str_limit($disk->description, 100) !!}</div>
                        <!-- <i class="fa fa-play"></i> -->
                    </div>
                </a>
                <div class="item-info">
                    <h3>{{ $disk->name }}</h3>
                </div>
            </div>
            @empty
            Книг нет
            @endforelse
            <div class="col-xs-12 pagination-block">
                {!! $disks->links() !!}
            </div>
        </div>
    </div>
</div>
@endsection
