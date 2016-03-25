<div class="search">
    <form action="{{ $url }}" class="search__form" autocomplete="off">
        @if (isset($searchString))
            <a href="/webinars" class="search__reset"><i class="fa fa-remove"></i></a>
        @endif
        <input type="text" class="search__input" name="searchString" placeholder="поиск">
        <button type="submit" class="search__button"><i class="fa fa-search"></i></button>
    </form>
    @if (isset($searchString))
    <div class="search__results">По запросу <span>{{ $searchString }}</span> найдено результатов: <span>{{ $webinars->count() }}</span></div>
    @endif
</div>
