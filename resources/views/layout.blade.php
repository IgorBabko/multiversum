<!DOCTYPE html>
<html>

<head>
    <title>Multiversum</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700&subset=latin,cyrillic'
    rel='stylesheet' type='text/css'>
    @include ('partials.styles')
    @include ('partials.livereload')
</head>

<body>
    @include ('partials.notifications')
    @include ('partials.nav')
    @yield ('content')
    @include ('partials.footer')
    @include ('partials.scripts')
</body>

</html>
