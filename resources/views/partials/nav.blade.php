<nav class="navbar navbar-default navbar-fixed-top {{ (\Request::route()->getName() == 'index') ? 'navbar-animated' :  '' }}">
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
                    <a class="navbar-brand logo" href="/">Multiversum</a>
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

                        <li class="{{ Request::is('/*') ? 'active' :  '' }}"><a href="/">Главная<span class="sr-only">(current)</span></a></li>
                        <li class="{{ Request::is('webinar*') ? 'active' :  '' }}"><a href="/webinars">Вебинары</a></li>
                        <li class="{{ Request::is('book*') ? 'active' :  '' }}"><a href="/books">Книги</a></li>
                        <li class="{{ Request::is('disk*') ? 'active' :  '' }}"><a href="/disks">Диски</a></li>
                        <li class="{{ Request::is('post*') ? 'active' :  '' }}"><a href="/posts">Статьи</a></li>
                        <li class="{{ Request::is('login') ? 'active' :  '' }}"><a href="/login">Войти</a></li>
                        <li class="{{ Request::is('register') ? 'active' :  '' }}"><a href="/register">Регистрация</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
