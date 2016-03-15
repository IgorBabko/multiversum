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
                        <li class="dropdown {{ Request::is('book*') || Request::is('disk*') || Request::is('post*') ? 'active' :  '' }}">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Галерея<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="/books">Книги</a></li>
                                <li><a href="/disks">Диски</a></li>
                                <li><a href="/posts">Статьи</a></li>
                            </ul>
                        </li>
                        <li class="dropdown {{ Request::is('login') || Request::is('register') ? 'active' :  '' }}">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Аккаунт<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                @if (Auth::guest())
                                    <li><a href="/login">Войти</a></li>
                                    <li><a href="/register">Регистрация</a></li>
                                @else
                                    <li><a href="{{ url('/profile') }}">Профиль</a></li>
                                    <li><a href="{{ url('/logout') }}">Выйти</a></li>
                                @endif
                            </ul>
                          </li>
                        <!-- <li><a href="/dashboard">Админка</a></li> -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
