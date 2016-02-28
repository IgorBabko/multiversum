<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="/css/font-awesome.css">
        <script src="/js/jquery.min.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax.js/1.4.2/parallax.min.js"></script>
        <script src="/js/ScrollMagic.js"></script>
        <script src="/js/debug.addIndicators.js"></script>
        <script src="/js/app.js"></script>
        @if ( Config::get('app.debug') )
        <script type="text/javascript">
        document.write('<script src="//localhost:35729/livereload.js?snipver=1" type="text/javascript"><\/script>')
        </script>
        @endif
    </head>
    <body>
        @include("partials.nav")
        @yield('content')
        @include("partials.footer")
    </body>
</html>
