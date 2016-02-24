<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="/css/app.css">
        @if ( Config::get('app.debug') )
        <script type="text/javascript">
        document.write('<script src="//localhost:35729/livereload.js?snipver=1" type="text/javascript"><\/script>')
        </script>
        @endif
    </head>
    <body>
        <nav class="navbar navbar-default">
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
                            <a class="navbar-brand" href="#">Multiversum</a>
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
                                <li class="active"><a href="./">О нас<span class="sr-only">(current)</span></a></li>
                                <li><a href="../navbar-static-top/">Вебинары</a></li>
                                <li><a href="../navbar-fixed-top/">Книги</a></li>
                                <li><a href="../navbar-fixed-top/">Диски</a></li>
                                <li><a href="../navbar-fixed-top/">Блог</a></li>
                                <li><a href="../navbar-fixed-top/">Контакты</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-xs-3 item">Наше расположение</div>
                    <div class="col-xs-3 item"><a id="email-link" href="mailto:portaciya@gmail.com">portaciya@gmail.com</a></div>
                    <div class="col-xs-3 item">niko</div>
                    <div class="col-xs-3 item">niko</div>
                </div>
            </div>
        </footer>
        <script src="/js/jquery.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
    </body>
</html>