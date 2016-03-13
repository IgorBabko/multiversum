<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Laravel</title>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Exo+2:400,100,100italic,200italic,200,300,300italic,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/dashboard.css">
        <link rel="stylesheet" href="/css/bootstrap-select.min.css">
        <link rel="stylesheet" href="/css/font-awesome.css">
        <link rel="stylesheet" href="/css/bootstrap-table.min.css">
        <script src="/js/jquery.min.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/bootstrap-table.min.js"></script>
        <script src="/js/bootstrap-table-ru-RU.min.js"></script>
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
        <div id="wrapper">
            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">Админ-панель</a>
                </div>
                <ul class="nav navbar-right top-nav">
                  <!--   <li>
                        <a href="#"><i class="fa fa-fw fa-user"></i>Профиль</a>
                    </li> -->
                    <li>
                        <a href="#"><i class="fa fa-fw fa-power-off"></i>Выйти</a>
                    </li>
                </ul>
            </li>
        </ul>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li class="active">
                    <a href="/dashboard">Главная</a>
                </li>
                <li>
                    <a href="/dashboard/webinars">Вебинары</a>
                </li>
                <li>
                    <a href="/dashboard/books">Книги</a>
                </li>
                <li>
                    <a href="/dashboard/disks">Диски</a>
                </li>
                <li>
                    <a href="/dashboard/posts">Статьи</a>
                </li>
            </ul>
        </div>
    </nav>
    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- <table id="table">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi autem laborum molestias aliquam fugit, assumenda earum vel, dolore repellendus asperiores ea doloribus quibusdam soluta commodi. Repellendus rerum deleniti, ipsam laudantium eius, consequuntur consequatur natus, iure veniam culpa asperiores nulla impedit veritatis facilis dignissimos eos doloribus vitae aspernatur quasi dolores maiores ab voluptates illo. Doloribus fugiat rerum porro unde possimus eos, a voluptate nostrum doloremque ipsa sit. Doloremque natus excepturi ea, consectetur perspiciatis porro, fugit, quia odio quo sed velit! Provident iste debitis exercitationem voluptates enim, aliquam, consectetur necessitatibus explicabo perferendis, inventore sequi, repellat. Mollitia porro perferendis esse expedita, totam dolorum est voluptatem quisquam eum reiciendis culpa fuga ipsa tempora laborum dicta atque eius laboriosam architecto id soluta aliquid! Ut placeat, veniam perferendis hic. Aut, modi ratione porro nobis facere harum fugiat quae, asperiores minus nemo doloremque accusamus rem eius, saepe consequuntur. Exercitationem quasi officia, quisquam aperiam, incidunt blanditiis non consectetur officiis odit nemo quas! Aliquam quis magnam minus impedit vel assumenda, nostrum maxime repellendus omnis aperiam nemo consequatur quisquam libero eligendi veritatis temporibus saepe inventore quo, a. Velit minus ab, rerum iure quia ea voluptatum ipsa officiis, error unde voluptates vitae sequi, nihil reiciendis dignissimos aut nisi ratione quibusdam a?</table> -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">26</div>
                                    <div>Вебинары</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Подробнее</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">12</div>
                                    <div>Книги</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Подробнее</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-shopping-cart fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">124</div>
                                    <div>Диски</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Подробнее</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-support fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">13</div>
                                    <div>Статьи</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Подробнее</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
