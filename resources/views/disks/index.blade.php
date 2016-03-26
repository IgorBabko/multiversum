@extends("layout")
@section("content")
<div class="Page">
    <div class="Page__content Page__content--with-resource">
        <h1 class="Page__heading">Диски</h1>
        @include('partials.search', ['resource' => $disks, 'searchUrl'=> '/disks/?/search', 'resetUrl' => '/disks'])
        <div class="Gallery">
            @forelse ($disks as $disk)
            <div>
                <div class="resource Disk">
                    <a href="/disks/{{ $disk->slug }}" class="Disk__link">
                        <div class="Overlay">
                            <span class="glyphicon glyphicon-play" aria-hidden="true"></span>
                        </div>
                        <img src="/uploads/images/disks/small/{{ $disk->image }}" class="Disk__image">
                        <h3 class="Disk__heading">{{ $disk->name }}</h3>
                    </a>
                </div>
            </div>
            @empty
            Книг нет
            @endforelse
        </div>
        <div class="pagination-block">
            {!! $disks->links() !!}
        </div>
    </div>
</div>
@endsection
