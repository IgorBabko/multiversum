<div class="remodal" data-remodal-id="webinars">
    <button data-remodal-action="close" class="remodal-close"></button>
    <h1>Прошедшие вебинары в записи</h1>
    <ul class="content-list">
        @forelse ($webinars as $webinar)
            <li>{{ $webinar->title }}</li>
        @empty
            На данный момент вебинаров нет
        @endforelse
    </ul>
</div>
