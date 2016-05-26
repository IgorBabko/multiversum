<!DOCTYPE html>
<html>

<head>
    <title>Multiversum</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700&subset=latin,cyrillic'
    rel='stylesheet' type='text/css'>
    <link href="css/normalize.css" rel="stylesheet" type="text/css">
    <link href="css/skeleton.css" rel="stylesheet" type="text/css">
    <link href="css/app.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css">@if ( Config::get('app.debug') )
    <script type="text/javascript">
        document.write(
            '<script src="//localhost:35729/livereload.js?snipver=1" type="text/javascript"><\/script>'
        )
    </script>
    @endif
</head>

<body>
    <nav>
        <div class="container">
            <div class="row nav-inner">
                <div class="logo"><a href="#"><i class="fa fa-globe logo-icon" aria-hidden="true"></i>Multiversum</a>
                </div>
                <button class="hamburger-button u-pull-right"><i class="fa fa-bars" aria-hidden="true"></i></button>
                <ul class="nav-list">
                    <li class="nav-list-item"><a href="#" class="nav-list-link">Промо</a>
                    </li>
                    <li class="nav-list-item"><a href="#" class="nav-list-link">Оплата</a>
                    </li>
                    <li class="nav-list-item"><a href="#" class="nav-list-link">Почта</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div>
        <div class="container">
            <main class="row">
                <div>
                    <div>
                        <h1>
                            Добро пожаловать на курс:<br>
                            <span>Ментально-духовное развитие</span>
                        </h1>
                    </div>
                    <div>
                        <video class="u-max-full-width" style="margin: 30px 0" width="640" height="480" controls>
                            <source src="https://s3.eu-central-1.amazonaws.com/multiversum/%d0%b2%d1%81%d1%82%d1%83%d0%bf%d0%bb%d0%b5%d0%bd%d0%b8%d0%b5.mp4" type="video/mp4">
                            ваш браузер не поддерживает воспроизведение видео
                        </video>
                    </div>
                    <div>
                        <a class="button button-primary" href="#">ознакомиться</a>
                    </div>
                </div>
            </main>
        </div>
        <div class="section section-blue"> 
            <div class="container">
                <h2 style="text-align: center; font-weight: 100; margin-bottom: 50px">Стать членом сообщества</h2> 
                some text     
            </div>
        </div>
        <div class="section">
            <div class="container">
                <h2 style="text-align: center; font-weight: 100; margin-bottom: 50px">Свяжитесь со мной</h2> 
                <form method="POST">
                    <div class="row">
                        <div class="six columns">
                            <label for="name">Имя</label>
                            <input class="u-full-width" type="text" id="name">
                        </div>
                        <div class="six columns">
                            <label for="email">Почта</label>
                            <input class="u-full-width" type="email" id="email">
                        </div>
                    </div>
                    <label for="message">Сообщение</label>
                    <textarea class="u-full-width" id="message"></textarea>
                    <button class="button-primary" type="submit">Submt</button
                </form>
            </div>
        </div>
        <footer>
            <div class=container">
                <ul class="social-list">
                    <li class="social-list-item">
                        <a href="https://www.facebook.com/profile.php?id=100006293505911&fref=nf" class="social-list-link" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li class="social-list-item">
                        <a href="https://www.youtube.com/channel/UCZuPMVsytT-L-HVTAquUaCA" class="social-list-link" target="_blank">
                            <i class="fa fa-youtube"></i>
                        </a>
                    </li>
                    <li class="social-list-item">
                        <a href="https://plus.google.com/109801612189366894181" class="social-list-link" target="_blank">
                            <i class="fa fa-google-plus"></i>
                        </a>
                    </li>
                </ul>
                <div class="copyright">&copy; Multiversum 2016 - Все права защищены</div>
            </div>
        </footer>
    </div>

    <script src="/js/jquery.min.js"></script>
    <script src="/js/all.js"></script>
</body>

</html>
