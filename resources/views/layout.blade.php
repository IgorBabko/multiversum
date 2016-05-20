<!DOCTYPE html>
<html>

<head>
    <title>Multiversum</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet"
    type="text/css">
    <link href="css/app.css" rel="stylesheet" type="text/css">
    @if ( Config::get('app.debug') )
        <script type="text/javascript">
            document.write(
                '<script src="//localhost:35729/livereload.js?snipver=1" type="text/javascript"><\/script>'
            )
        </script>
    @endif
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="six columns">
                <h4>Добро пожаловать на Multiversum</h1>
            </div>
            <div class="six columns">
                <video width="320" height="240" controls>
                    <source src="movie.mp4" type="video/mp4">
                    <source src="movie.ogg" type="video/ogg">
                        Ваш браузер не поддерживает воспроизведение видео
                </video>
            </div>
        </div>
    </div>
</body>

</html>
