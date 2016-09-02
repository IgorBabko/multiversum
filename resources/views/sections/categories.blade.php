<div class="section section-light-blue" id="categories-section">
    <div class="container">
        <h2 class="main-heading" style="text-align: center; color: #0b4975">Ментально-духовное развитие</h2>
        <div class="row centered">
            <div class="six columns">
                <div class="avatar-wrapper">
                    <img src="img/portrait.jpg" class="photo">
                    <a data-remodal-target="bio" href="#" class="button Bio__button">Об авторе</a>
                </div>
            </div>
            <div class="six columns">
                <div class="main-questions" style="background: #ff5757; color: white; font-weight: bold; font-size: 18px">
                    <h5 style="color: white; text-align: center; font-weight: bold">Ближайший вебинар</h5>
                    <span>Тема: <span style="color: #fff44a">Вопросы и ответы</span></span><br>
                    <span>Дата: <span style="color: #fff44a">27.07.2016 в 16.00 (по Киевскому времени)</span></span><br>
                    @if ( ! Auth::user() )
                    <span style="font-size: 14px; line-height: 1">Для регистрации на вебинар <a style="color: #2affbe" href="#login">войдите</a> в аккаунт или <a style="color: #2affbe" href="#register">зарегистрируйтесь</a>, если у Вас еще нет аккаунта</span>
                    @else
                    <span>Стоимость вебинара: <span style="color: #fff44a">1$</span></span><br>
                    <span style="font-size: 14px">После оплаты Вам на почту будут высланы ссылка и пароль на вебинар</span>
                    <?php $unique_id = uniqid('php_');?>
                    <form method="POST" accept-charset="utf-8" action="https://www.liqpay.com/api/3/checkout">
                        <input type="hidden" name="data" value='{{ base64_encode("{\"language\": \"ru\", \"result_url\": \"https://multiversum.in.ua\", \"server_url\": \"https://multiversum.in.ua/webinar\", \"order_id\": \"" . $unique_id . "\", \"description\": \"" . Auth::user()->email . "\", \"amount\": 1, \"currency\": \"USD\", \"action\": \"pay\", \"public_key\": \"i20047806537\"}") }}' />
                        <input type="hidden" name="signature" value='{{ base64_encode( sha1( env('LIQPAY_PRIVATE_KEY') . base64_encode("{\"language\": \"ru\", \"result_url\": \"https://multiversum.in.ua\", \"server_url\": \"https://multiversum.in.ua/webinar\", \"order_id\": \"" . $unique_id . "\", \"description\": \"" . Auth::user()->email . "\", \"amount\": 1, \"currency\": \"USD\", \"action\": \"pay\", \"public_key\": \"i20047806537\"}") . env('LIQPAY_PRIVATE_KEY'), 1 ) ) }}' />
                        <input type="image" src="//static.liqpay.com/buttons/p1ru.radius.png" name="btn_text" />
                    </form>
                    <div style="clear: both"></div>
                    @endif
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
                    <li>
                        <img src="img/livestream.png">
                        <div>
                            <h5>Вебинары в прямом эфире</h5>
                            <p class="label">Стоимость: <span>1$</span></p>
                            {{-- @if (Auth::user())
                            <button data-section-id="livestreams-section" class="button Category__button">Перейти</button>
                            @else
                            <button data-section-id="payment-section" class="button Category__button">Перейти</button>
                            @endif --}}
                            {{-- <button data-section-id="payment-section" class="button Category__button">Перейти</button> --}}
                            <a data-remodal-target="future-webinars" href="#" class="button Content__button">Расписание</a>
                            <div class="clear"></div>
                        </div>
                    </li>
                    <li>
                        <img src="img/webinar.png">
                        <div>
                            <h5>Вебинары</h5>
                            <p class="label">Стоимость: <span>1$</span></p>
                            <a data-remodal-target="webinars" href="#" class="button Content__button">Содержание</a>
                            @if ( Auth::user() && Auth::user()->paidForWebinars )
                                <button data-section-id="webinars-section" class="button Category__button">Перейти</button>
                            @elseif (Auth::user())
                                @include ('sections.payment', ['callbackUrl' => 'https://multiversum.in.ua/paymentForWebinars' ])
                            @endif
                            <div class="clear"></div>
                        </div>
                    </li>
                    <li>
                        <img src="img/lecture.png">
                        <div>
                            <h5>Видео-лекции</h5>
                            <p class="label">Стоимость: <span>1$</span></p>
                            <a data-remodal-target="lectures" href="#" class="button Content__button">Содержание</a>
                            @if ( Auth::user() && Auth::user()->paidForLectures )
                                <button data-section-id="lectures-section" class="button Category__button">Перейти</button>
                            @elseif (Auth::user())
                                @include ('sections.payment', ['callbackUrl' => 'https://multiversum.in.ua/paymentForLectures' ])
                            @endif
                            <div class="clear"></div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>