<nav class="navbar navbar-default navbar-fixed-top ">
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
                    <a class="navbar-brand logo" href="/">Админка</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="{{ Request::is('dashboard') ? 'active' :  '' }}"><a href="/dashboard/">Главная<span class="sr-only">(current)</span></a></li>
                        <li class="{{ Request::is('dashboard/webinar*') ? 'active' :  '' }}"><a href="/dashboard/webinars">Вебинары</a></li>
                        <li class="{{ Request::is('dashboard/book*') ? 'active' :  '' }}"><a href="/dashboard/books">Книги</a></li>
                        <li class="{{ Request::is('dashboard/disk*') ? 'active' :  '' }}"><a href="/dashboard/disks">Диски</a></li>
                        <li class="{{ Request::is('dashboard/post*') ? 'active' :  '' }}"><a href="/dashboard/posts">Статьи</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
