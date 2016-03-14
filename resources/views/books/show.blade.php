@extends("layout")
@section("content")
<div class="book-content page-content books-wrapper">
    <div class="container">
        <div class="row">
            <h1>{{ $book->name }}</h1>
            <hr class="light-line">
            <div class="book-wrapper col-xs-12 col-sm-4 col-md-3">
                <img src="http://placehold.it/200x270" alt="Книга 1">
                <button class="btn buy-button">Купить</button>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-9 description-block">
                <p class="description">{!! $book->description !!}</p>
                <span>Дата публикации: {{ $book->published_at->format('m.d.Y') }}</span>
            </div>
        </div>
    </div>
    <div class="comments-block">
        <div class="container">
            <h1>Комментарии</h1>
            <div class="row">
                <div class="col-xs-12">
                    <div id="disqus_thread"></div>
                    <script>
                        var disqus_config = function () {
                            this.page.url = '{{ $request->url() }}';
                            this.page.identifier = '{{ $book->slug }}';
                        };

                        (function() {
                            var d = document, s = d.createElement('script');
                            s.src = '//multiversum.disqus.com/embed.js';
                            s.setAttribute('data-timestamp', +new Date());
                            (d.head || d.body).appendChild(s);
                        })();
                    </script>

                    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection