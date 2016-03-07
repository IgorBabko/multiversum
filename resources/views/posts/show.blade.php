@extends("layout")
@section("content")
<div class="post-content page-content posts-wrapper">
    <div class="container">
        <div class="row">
            <h1>{{ $post->name }}</h1>
            <hr class="light-line">
            <div class="post-wrapper col-xs-12 col-sm-12 col-md-5">
                <img src="http://placehold.it/200x270" alt="Статья 1">
                <!-- <br> -->
                <!-- <button class="btn buy-button">Купить</button> -->
            </div>
            <div class="col-xs-12 col-sm-12 col-md-7">
                <p class="description">{!! $post->content !!}</p>
                <span>Дата публикации: {{ $post->published_at->format('m.d.Y') }}</span>
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
                            this.page.identifier = '{{ $post->slug }}';
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
