<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Lobster&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
        <!-- <link href='https://fonts.googleapis.com/css?family=Exo+2:400,100,100italic,200italic,200,300,300italic,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic&subset=latin,cyrillic' rel='stylesheet' type='text/css'> -->
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="/css/bootstrap-select.min.css">
        <link rel="stylesheet" href="/css/font-awesome.css">
        <script src="/js/jquery.min.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/bootstrap-select.min.js"></script>
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
        <script src="/js/svgcheckbx.js"></script>
    </body>
</html>
