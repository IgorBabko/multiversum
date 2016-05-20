<!DOCTYPE html>
<html>

<head>
    <title>Multiversum</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
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
                <h4 style="font-weight: 100">
                    Добро пожаловать на курс:<br>
                    Ментально-духовное развитие
                </h1>
            </div>
            <div class="six columns">
                <video width="640" height="480" controls>
                    <source src="https://s3.eu-central-1.amazonaws.com/multiversum/%D0%B2%D1%81%D1%82%D1%83%D0%BF%D0%BB%D0%B5%D0%BD%D0%B8%D0%B5.mp4" type="video/mp4">
                        Ваш браузер не поддерживает воспроизведение видео
                </video>
            </div>
        </div>
    </div>
</body>

</html>
