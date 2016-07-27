<nav>
    <div class="container">
        <div class="row nav-inner">
            <div class="logo"><a href="/"><i class="fa fa-globe logo-icon" aria-hidden="true"></i>Multiversum</a>
            </div>
            <button class="hamburger-button u-pull-right"><i class="fa fa-bars" aria-hidden="true"></i>
            </button>
            <ul class="nav-list">
                @if ( Request::is('/') )
                    <li class="nav-list-item"><a href="#" data-section-id="categories-section" class="nav-list-link"
                        class="active">Промо</a>
                    </li>
                    <li class="nav-list-item"><a href="#" data-section-id="about-section" class="nav-list-link">О курсе</a>
                    </li>
                    <li class="nav-list-item"><a href="#" data-section-id="previews-section" class="nav-list-link">Анонсы</a>
                    @if ( ! Auth::check() )
                        <li class="nav-list-item"><a href="#" data-section-id="webinars-section" class="nav-list-link">Вебинары</a>
                        </li>
                        <li class="nav-list-item"><a href="#" data-section-id="lectures-section" class="nav-list-link">Лекции</a>
                        </li>
                        <li class="nav-list-item"><a href="#" data-section-id="books-section" class="nav-list-link">Книги</a>
                        </li>
                        <li class="nav-list-item"><a href="#" data-section-id="email-section" class="nav-list-link">Почта</a>
                        </li>
                    @else
                        @if ( ! Auth::user()->isPremium() )
                            <li class="nav-list-item"><a href="#" data-section-id="webinars-section" class="nav-list-link">Вебинары</a>
                            </li>
                            <li class="nav-list-item"><a href="#" data-section-id="lectures-section" class="nav-list-link">Лекции</a>
                            </li>
                        @else
                            <li class="nav-list-item"><a href="#" data-section-id="lectures-section" class="nav-list-link">Лекции</a></li>
                        @endif
                        <li class="nav-list-item"><a href="#" data-section-id="books-section" class="nav-list-link">Книги</a>
                        </li>
                        <li class="nav-list-item"><a href="#" data-section-id="email-section" class="nav-list-link">Почта</a>
                        </li>
                        <li class="nav-list-item"><a href="/logout" class="nav-list-link normal">Выйти</a></li>
                    @endif
                @else
                    <li class="nav-list-item"><a href="/" class="nav-list-link normal">Главная</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>
