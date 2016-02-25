<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
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

        </header>
        <div class="content">

        </div>
        <div class="parallax-content">

        </div>
        <div class="before-footer">

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
