<div class="section section-light-blue" id="categories-section">
    <div class="container">
        <h2 class="main-heading" style="text-align: center; color: #0b4975">Ментально-духовное развитие</h2>
        <div class="row centered">
            <div class="twelve columns centered">
                <div class="avatar-wrapper">
                    <img src="img/portrait.jpg" class="photo">
                    <a data-remodal-target="bio" href="#" class="button Bio__button">Об авторе</a>
                </div>
            </div>
        </div>
        @if ( ! Auth::check())
        <div class="row centered">
            <div class="twelve columns important-message">
                Для доступа к платным материалам необходимо <a style="color: #2affbe" href="#register">зарегистрироваться</a> или <a style="color: #2affbe" href="#login">войти</a> в аккаунт, и оплатить желаемый контент
            </div>
        </div>
        @endif
        <div class="row centered">
            <div class="six columns">
                <ul>
                    <li>
                        <img src="img/promo.png">
                        <div>
                            <h5>О чем этот курс</h5>
                            <p class="label">Бесплатно</p>
                            <a data-remodal-target="promo" class="button Content__button">Презентация</a>
                            <div class="clear"></div>
                        </div>
                    </li>
                    <li>
                        <img src="img/previews.png">
                        <div>
                            <h5>Видео анонсы</h5>
                            <p class="label">Бесплатно</p>
                            <a data-remodal-target="previews" href="#" class="button Content__button">Содержание</a>
                            <button data-section-id="previews-section" class="button Category__button">Перейти</button>
                            <div class="clear"></div>
                        </div>
                    </li>
                    <li>
                        <img src="img/books.png">
                        <div>
                            <h5>Литература</h5>
                            <p class="label">Бесплатно</p>
                            <a data-remodal-target="books" href="#" class="button Content__button">Содержание</a>
                            <button data-section-id="books-section" class="button Category__button">Перейти</button>
                            <div class="clear"></div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="six columns">
                <ul>
                    {{-- <li>
                        <img src="img/livestream.png">
                        <div>
                            <h5>Вебинары в прямом эфире</h5>
                            <p class="label">Стоимость: <span>1$ = 26 грн. = 63 руб.</span></p>
                            <a data-remodal-target="future-webinars" href="#" class="button Content__button">Расписание</a>
                            <div class="clear"></div>
                        </div>
                    </li> --}}
                    <li>
                        <img src="img/lecture.png">
                        <div>
                            <h5>Видео-лекции</h5>
                            <p class="label">Стоимость: <span>1$ = 26 грн. = 63 руб.</span></p>
                            <a data-remodal-target="lectures" href="#" class="button Content__button">Содержание</a>
                            @if ( Auth::user() && Auth::user()->paidForLectures )
                                <button data-section-id="lectures-section" class="button Category__button">Перейти</button>
                            @elseif (Auth::user())
                                @include ('sections.payment', ['callbackUrl' => 'https://multiversum.in.ua/paymentForLectures' ])
                            @endif
                            <div class="clear"></div>
                        </div>
                    </li>
                    <li>
                        <img src="img/webinar.png">
                        <div>
                            <h5>Прошедшие вебинары в записи</h5>
                            <p class="label">Стоимость: <span>1$ = 26 грн. = 63 руб.</span></p>
                            <a data-remodal-target="webinars" href="#" class="button Content__button">Содержание</a>
                            @if ( Auth::user() && Auth::user()->paidForWebinars )
                                <button data-section-id="webinars-section" class="button Category__button">Перейти</button>
                            @elseif (Auth::user())
                                @include ('sections.payment', ['callbackUrl' => 'https://multiversum.in.ua/paymentForWebinars' ])
                            @endif
                            <div class="clear"></div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
