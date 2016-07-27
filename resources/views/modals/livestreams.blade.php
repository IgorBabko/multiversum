<div class="remodal" data-remodal-id="livestreams">
    <button data-remodal-action="close" class="remodal-close"></button>
    <h1>Ближайшие вебинары</h1>
    <ul class="content-list">
        @forelse ($lectures as $lecture)
            <li>{{ $lecture->title }}</li>
        @empty
            На данный момент видео-лекций нет
        @endforelse
    </ul>
</div>
