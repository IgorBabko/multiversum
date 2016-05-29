<div class="comments">
    <div class="comments__content">
        <h2 class="comments__heading">Комментарии</h2>
        <div id="disqus_thread"></div>
        <script>
            var disqus_config = function()
            {
                this.page.url = '{{ $request->url() }}';
                this.page.identifier = '{{ $video->id }}';
            };
            (function()
            {
                var d = document,
                    s = d.createElement('script');
                s.src = '//multiversum.disqus.com/embed.js';
                s.setAttribute('data-timestamp', +new Date());
                (d.head || d.body).appendChild(s);
            })();
        </script>
        <noscript>Пожалуйста, включить JavaScript для просмотра <a href="https://disqus.com/?ref_noscript"
            rel="nofollow">комментариев сервиса Disques.</a>
        </noscript>
    </div>
</div>
