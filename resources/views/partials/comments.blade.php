<div class="comments">
    <div class="comments__content">
        <h1 class="comments__heading">Комментарии</h1>
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
