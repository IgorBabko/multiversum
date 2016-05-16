@extends("layout")
@section("content")
<div class="Page">
    <div class="Page__content Page__content--transparent">
        <h1 class="Page__heading Page__heading--yellow">Диски</h1>
        @include('partials.search', ['class' => '', 'searchUrl'=> '/disks/?/search', 'resetUrl' => '/disks', 'placeholder' => 'искать диски'])
        <div class="Gallery">
            @forelse ($disks as $disk)
            <div>
                <div class="resource Disk">
                    <a href="/disks/{{ $disk->slug }}" class="Disk__link">
                        <div class="Overlay">
                            <span class="glyphicon glyphicon-record" aria-hidden="true"></span>
                        </div>
                        <img src="{{ $disk->image }}" class="Disk__image">
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
