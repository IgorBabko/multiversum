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
        <script src="/js/app.js"></script>
        @if ( Config::get('app.debug') )
        <script type="text/javascript">
        document.write('<script src="//localhost:35729/livereload.js?snipver=1" type="text/javascript"><\/script>')
        </script>
        @endif
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="row">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand logo" href="#">Multiversum</a>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <!-- <ul class="nav navbar-nav">
                                <li class="active"><a href="#">Home</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Contact</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li class="dropdown-header">Nav header</li>
                                        <li><a href="#">Separated link</a></li>
                                        <li><a href="#">One more separated link</a></li>
                                    </ul>
                                </li>
                            </ul> -->
                            <ul class="nav navbar-nav navbar-right">
                                <li class="active"><a href="#">О нас<span class="sr-only">(current)</span></a></li>
                                <li><a href="#">Вебинары</a></li>
                                <li><a href="#">Книги</a></li>
                                <li><a href="#">Диски</a></li>
                                <li><a href="#">Блог</a></li>
                                <li><a href="#">Контакты</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <header>
            <div class="header-content">
                <h1>Главный заголовок</h1>
                <hr class="light-line">
                <h3 id="quote">Здесь можно написать цитату</h3>
                <!-- <button class="btn btn-primary">Кнопка</button> -->
                <div class="bounce"><i class="fa fa-angle-double-down"></i></div>
            </div>
        </header>
        <div class="about-me-wrapper">
            <div class="container about-me">
                <div class="row">
                    <h1>Обо мне</h1>
                    <hr class="light-line">
                    <div class="col-xs-offset-1 col-xs-10 col-sm-offset-2 col-sm-8 col-md-offset-1 col-md-3 col-lg-offset-0 col-lg-4">
                        <div id="main-avatar">
                            <img src="/img/main-avatar-gray.jpg" main-avatar class="img-responsive img-circle" alt="мой аватар">
                        </div>
                    </div>
                    <div class="col-xs-offset-1 col-xs-10 col-sm-offset-1 col-sm-10 col-md-offset-0 col-md-7 col-lg-offset-0 col-lg-8">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis quasi tenetur modi maiores totam. Error, laboriosam, cupiditate dolorum voluptates dolore dolor animi consectetur doloremque harum vero minus.
                        <br><br>
                    Iste, cupiditate, rem! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis quasi tenetur modi maiores totam. Error, laboriosam, cupiditate dolorum.</div>
                </div>
            </div>
        </div>
        <!--   <div class="parallax-content">
        </div> -->
        <div class="video-block-wrapper">
            <div class="container video-block">
                <div class="row centered">
                    <h1>Недавние вебинары</h1>
                    <hr class="light-line">
                    <div class="col-md-4 col-sm-6">
                        <img src="http://placehold.it/400x250" class="video">
                        <h3>Видео 1</h3>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <img src="http://placehold.it/400x250" class="video">
                        <h3>Видео 2</h3>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <img src="http://placehold.it/400x250" class="video">
                        <h3>Видео 3</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="posts-wrapper">
            <div class="container posts">
                <div class="row centered">
                    <h1>Свежие статьи</h1>
                    <hr class="light-line">
                    <div class="col-md-4 col-sm-6 col-sm-offset-0 col-xs-offset-1 col-xs-10">
                        <img src="http://placehold.it/400x250" class="img-responsive post-thumbnail" alt="Статья 1">
                        <div class="post-info">
                            <h3>Статья 2</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, mollitia atque temporibus totam incidunt doloribus suscipit tempore nulla qui, facilis, in possimus delectus quam et.</p>
                            <p class="post-meta-info">February 31, 2015 9 Comments  12</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-sm-offset-0 col-xs-offset-1 col-xs-10">
                        <img src="http://placehold.it/400x250" class="img-responsive  post-thumbnail" alt="Статья 1">
                        <div class="post-info">
                            <h3>Статья 3</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, mollitia atque temporibus totam incidunt doloribus suscipit tempore nulla qui, facilis, in possimus delectus quam et.</p>
                            <p class="post-meta-info">February 31, 2015 9 Comments  12</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-md-offset-0 col-sm-offset-3 col-xs-offset-1 col-xs-10">
                        <img src="http://placehold.it/400x250" class="img-responsive post-thumbnail" alt="Статья 1">
                        <div class="post-info">
                            <h3>Статья 1</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, mollitia atque temporibus totam incidunt doloribus suscipit tempore nulla qui, facilis, in possimus delectus quam et.</p>
                            <p class="post-meta-info">February 31, 2015 9 Comments  12</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="email-block">
            <div class="row">
                <div class="col-xs-offset-1 col-xs-10 col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6">
                    <h1>Связаться со мной</h1>
                    <hr class="light-line">
                    <form>
                        <input type="email" placeholder="Имя">
                        <input type="password" placeholder="Email">
                        <textarea placeholder="Сообщение"></textarea>
                        <button type="submit">Отправить</button>
                    </form>
                </div>
            </div>
        </div>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-xs-3 item"><i class="fa fa-home"></i>Наше расположение</div>
                    <div class="col-xs-3 item"><i class="fa fa-envelope"></i><a id="email-link" href="mailto:portaciya@gmail.com">portaciya@gmail.com</a></div>
                    <div class="col-xs-3 item">
                        <ul class="social-icons-list">
                            <li><i class="fa fa-facebook"></i></li>
                            <li><i class="fa fa-instagram"></i></li>
                            <li><i class="fa fa-youtube"></i></li>
                            <li><i class="fa fa-google-plus"></i></li>
                        </ul>
                    </div>
                    <div class="col-xs-3 item">
                        <span class="logo">Multiversum</span><br/>
                        <span id="copyright">&copy; Все права защищены</span>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
