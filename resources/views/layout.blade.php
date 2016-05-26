<!DOCTYPE html>
<html>

<head>
    <title>Multiversum</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700&subset=latin,cyrillic'
    rel='stylesheet' type='text/css'>
    <link href="css/normalize.css" rel="stylesheet" type="text/css">
    <link href="css/skeleton.css" rel="stylesheet" type="text/css">
    <link href="css/remodal.css" rel="stylesheet" type="text/css">
    <link href="css/remodal-default-theme.css" rel="stylesheet" type="text/css">
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
                <li class="nav-list-item"><a href="#" data-section-id="promo-section" class="nav-list-link" class="active">Промо</a></li>
                    <li class="nav-list-item"><a href="#" data-section-id="about-section" class="nav-list-link">О курсе</a></li>
                    <li class="nav-list-item"><a href="#" data-section-id="account-section" class="nav-list-link">Аккаунт</a></li>
                    <li class="nav-list-item"><a href="#" data-section-id="home-section" class="nav-list-link">Почта</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div>
        <div class="container">
            <main class="row section" style="padding-top: 20px" id="promo-section">
                <div>
                    <div>
                        <h2 class="email-heading">
                            Ментально-духовное развитие
                        </h2>
                    </div>
                    <div>
                        <video class="u-max-full-width" style="margin: 30px 0" width="640" height="480" controls>
                            <source src="https://s3.eu-central-1.amazonaws.com/multiversum/%d0%b2%d1%81%d1%82%d1%83%d0%bf%d0%bb%d0%b5%d0%bd%d0%b8%d0%b5.mp4" type="video/mp4">
                            ваш браузер не поддерживает воспроизведение видео
                        </video>
                    </div>
                    <div>
                        <a class="main-button link-button">ознакомиться</a>
                    </div>
                </div>
            </main>
        </div>
        <div class="section section-blue" id="about-section"> 
            <div class="container">
                <h2>О курсе</h2>
                <div class="description centered">
                    <p>new york is a state in the northeastern united states and is the 27th-most extensive, fourth-most populous, and seventh-most densely populated u.s. state. new york is bordered by new jersey and pennsylvania to the south and connecticut, massachusetts, and vermont to the east. the state has a maritime border in the atlantic ocean with rhode island, east of long island, as well as an international border with the canadian provinces of quebec to the north and ontario to the west and north. the state of new york, with an estimated 19.              </p></div>
                <div class="row centered">
                    <div class="six columns">
                        <img src="/img/space.jpg" class="space">
                    </div>
                    <div class="six columns">
                        <h3>Программа</h3>
                        <ul class="program-list">
                            <li>Человека и Вселенная</li>
                            <li>Время и пространство</li>
                            <li>Любовь</li>
                            <li>Реинкарнация</li>
                            <li>Время, в котором мы живем</li>
                            <li>Этика</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="section section-red centered" id="account-section">
            <div class="container">
                <div class="row">Для получения полного доступа к курсе пройдите простую регистрацию ниже и оплатите курс всего за <span class="price">10 грн<span></div>
                <div class="row account-buttons">
                    <a class="register-button link-button" href="#register">Регистрация</a>
                    <a class="login-button link-button" href="#login">Войти</a>
                </div>
            </div>
        </div>
        <!--<div class="section section-gray"> 
            <div class="container">
                <div class="row">
                    <div class="six columns">
                        <h2 style="text-align: center; font-weight: 100; margin-bottom: 50px">Регистрация</h2> 
                        <form method="POST" action="{{ url('/register') }}">
                            {{ csrf_field() }}
                            <div class="column form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="name">Email</label>
                                <input type="email" class="u-full-width" name="email" id="email">
                            </div>

                            <div class="column form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="password">пароль</label>
                                <input type="password" class="u-full-width" name="password" id="password">
                            </div>

                            <div class="column form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="password_confirmation">Подтвердить пароль</label>
                                <input type="password" class="u-full-width" name="password-confirmation" id="password_confirmation">
                            </div>
                            <div class="column centered">
                                <button class="button button-primary" type="submit">Регистрация</button>
                            </div>
                        </form>
                    </div>
                    <div class="six columns">
                        <h2 style="text-align: center; font-weight: 100; margin-bottom: 50px">Войти</h2> 
                        <form method="post" action="{{ url('/login') }}">
                            {{ csrf_field() }}
                            <div class="column form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="name">Email</label>
                                <input type="email" class="u-full-width" name="email" id="email">
                            </div>

                            <div class="column form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password">Пароль</label>
                                <input type="password" class="u-full-width" name="password" id="password">
                            </div>

                            <div class="column centered">
                                <button class="button button-primary" type="submit">
                                    Войти
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>-->
        <div class="section" id="email-section">
            <div class="container centered">
                <h2 class="email-heading">Свяжитесь со мной</h2> 
                <img src="/img/mail.jpg" class="mail-img">
                <a class="email-button link-button">Написать</a>
                <!--<form method="POST">
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
                    <button class="button button-primary" type="submit">Submt</button
                </form>-->
            </div>
        </div>
        <footer class="section-dark-blue centered">
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
    <div class="remodal" data-remodal-id="register">
        <button data-remodal-action="close" class="remodal-close"></button>
            <h1>Создать аккаунт</h1>
            <form method="POST" action="{{ url('/register') }}" style="text-align: left">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="name">Email</label>
                    <input type="email" class="u-full-width" name="email" id="email">
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="password">пароль</label>
                    <input type="password" class="u-full-width" name="password" id="password">
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="password_confirmation">Подтвердить пароль</label>
                    <input type="password" class="u-full-width" name="password-confirmation" id="password_confirmation">
                </div>
                <div class="modal-actions">
                    <button data-remodal-action="cancel" class="remodal-cancel">Назад</button>
                    <button data-remodal-action="confirm" class="remodal-confirm" type="submit">Регистрация</button>
                </div>
            </form>
            <br>
    </div>


    <div class="remodal" data-remodal-id="login">
        <button data-remodal-action="close" class="remodal-close"></button>
            <h1>Войти</h1>
            <form method="POST" action="{{ url('/login') }}" style="text-align: left">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="name">Email</label>
                    <input type="email" class="u-full-width" name="email" id="email">
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password">Пароль</label>
                    <input type="password" class="u-full-width" name="password" id="password">
                </div>

                <div class="modal-actions">
                    <button data-remodal-action="cancel" class="remodal-cancel">Назад</button>
                    <button data-remodal-action="confirm" class="remodal-confirm" type="submit">Войти</button>
                </div>
            </form>
            <br>
    </div>

    <script src="/js/jquery.min.js"></script>
    <script src="/js/parallax.min.js"></script>
    <script src="/js/remodal.min.js"></script>
    <script src="/js/all.js"></script>
</body>

</html>
