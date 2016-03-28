<nav class="navbar navbar-default navbar-fixed-top {{ (\Request::route()->getName() == 'index') ? 'navbar-animated' :  '' }}">
    <div class="container">
        <div class="row">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="sr-only">Toggle navigation</span>
                    </button>
                    <a class="navbar-brand logo" href="/">Multiversum</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="{{ Request::is('/*') ? 'active' :  '' }}"><a href="/">Главная<span class="sr-only">(current)</span></a></li>
                        <li class="{{ Request::is('about') ? 'active' :  '' }}"><a href="/about">Обо мне</a></li>
                        <li class="dropdown {{ Request::is('video*') || Request::is('book*') || Request::is('disk*') || Request::is('post*') ? 'active' :  '' }}">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Галерея<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li class="{{ Request::is('video*') ? 'active' :  '' }}"><a href="/videos">Видео</a></li>
                                <li class="{{ Request::is('book*') ? 'active' :  '' }}"><a href="/books">Книги</a></li>
                                <li class="{{ Request::is('disk*') ? 'active' :  '' }}"><a href="/disks">Диски</a></li>
                                <li class="{{ Request::is('post*') ? 'active' :  '' }}"><a href="/posts">Статьи</a></li>
                            </ul>
                        </li>
                        <li class="{{ Request::is('email') ? 'active' :  '' }}"><a href="/email">Почта</a></li>
                        <li class="dropdown {{ Request::is('login') || Request::is('register') ? 'active' :  '' }}">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Аккаунт<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                @if (Auth::guest())
                                    <li class="{{ Request::is('login') ? 'active' :  '' }}"><a href="/login">Войти</a></li>
                                    <li class="{{ Request::is('register') ? 'active' :  '' }}"><a href="/register">Регистрация</a></li>
                                @else
                                    @can ('access-admin-area')
                                        <li><a href="/admin">Админка</a></li>
                                    @endcan
                                    <li class="{{ Request::is('profile') ? 'active' :  '' }}"><a href="{{ url('/profile') }}">Профиль</a></li>
                                    <li><a href="{{ url('/logout') }}">Выйти</a></li>
                                @endif
                            </ul>
                          </li>
                        <!-- <li><a href="/admin/webinars">Админка</a></li> -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
