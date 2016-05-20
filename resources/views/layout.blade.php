<!DOCTYPE html>
<html>

<head>
    <title>Multiversum</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link href="css/normalize.css" rel="stylesheet" type="text/css">
    <link href="css/skeleton.css" rel="stylesheet" type="text/css">
    <link href="css/app.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
    @if ( Config::get('app.debug') )
      <script type="text/javascript">
        document.write('<script src="//localhost:35729/livereload.js?snipver=1" type="text/javascript"><\/script>')
      </script> 
    @endif
</head>
<body>
    <nav>
        <div class="container">
            <div class="row nav-inner">
                <div class="logo"><i class="fa fa-globe logo-icon" aria-hidden="true"></i>Multiversum</div>
                <ul class="u-pull-right nav-list">
                    <li class="nav-list-item"><a href="#" class="nav-list-link">Промо</a></li>
                    <li class="nav-list-item"><a href="#" class="nav-list-link">Оплата</a></li>
                    <li class="nav-list-item"><a href="#" class="nav-list-link">Почта</a></li>
                </ul>
            </div> 
        </div>
    </nav>
    <div class="container">
        <main class="row">
            <div>
                <h4 style="font-weight: 100">
                    Добро пожаловать на курс:<br>
                    Ментально-духовное развитие
                </h1>
                <a class="button button-primary" href="#">ознакомиться</a>
            </div>
            <div>
                <video class="u-max-full-width" width="550" height="420" controls>
                    <source src="https://s3.eu-central-1.amazonaws.com/multiversum/%d0%b2%d1%81%d1%82%d1%83%d0%bf%d0%bb%d0%b5%d0%bd%d0%b8%d0%b5.mp4" type="video/mp4">
                    ваш браузер не поддерживает воспроизведение видео
                </video>
            </div>
        </main>
    </div>
</body>

</html>
