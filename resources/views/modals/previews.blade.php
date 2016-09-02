<div class="remodal" data-remodal-id="previews">
    <button data-remodal-action="close" class="remodal-close"></button>
    <h1>Видео анонсы</h1>
    <ul class="content-list">
        @forelse ($previews as $preview)
            <li>{{ $preview->title }}</li>
        @empty
            На данный момент видео анонсов нет
        @endforelse
    </ul>
</div>
