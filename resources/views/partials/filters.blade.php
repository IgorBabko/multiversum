<div class="filters">
    <div class="btn-group Filter">
        <a href="/posts">
            <button class="btn btn-default">Все</button>
        </a>
    </div>
    <div class="btn-group Filter">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Категории <span class="caret"></span>
        </button>
        <ul class="dropdown-menu">
            @foreach ($categories as $category)
            <li><a href="/posts/category/{{ $category->name }}">{{ $category->name }}<span class="pull-right">{{ $category->posts()->count() }}</span></a></li>
            @endforeach
        </ul>
    </div>
    <div class="btn-group Filter">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Теги <span class="caret"></span>
        </button>
        <ul class="dropdown-menu">
            @foreach ($tags as $tag)
            <li><a href="/posts/tag/{{ $tag->name }}">{{ $tag->name }}<span class="pull-right">{{ $tag->posts()->count() }}</span></a></li>
            @endforeach
        </ul>
    </div>
</div>
