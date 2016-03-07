@extends("layout")
@section("content")
<div class="video-content page-content videos-wrapper">
    <div class="container">
        <div class="row">
            <h1>{{ $webinar->name }}</h1>
            <div class="video-wrapper col-xs-12 col-sm-4 col-md-3">
                <img src="http://placehold.it/200x270" alt="Видео 1">
                <br>
                <button class="btn buy-button">Посмотреть</button>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-9">
                <p>{!! $webinar->description !!}</p>
                <span>Дата публикации: {{ $webinar->published_at->format('m.d.Y') }}</span>
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
                            this.page.identifier = '{{ $webinar->slug }}';
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
