<div class="section section-light-blue" id="categories-section">
    <div class="container">
        <h2 class="main-heading" style="text-align: center; color: #0b4975">Ментально-духовное развитие</h2>
        <div class="row centered">
            <div class="six columns">
                <img src="img/photo_mini.png" class="photo">
                <div class="main-questions" style="background: white">
                    <h5 style="text-align: center; font-weight: bold">Ближайший вебинар</h5>
                    <span>Тема: <strong style="color: #c11515">Вопросы и ответы</strong></span><br>
                    <span>Дата: <strong style="color: #c11515">27.07.2016 в 16.00 (по Киевскому времени)</strong></span><br>
                    @if ( ! Auth::user() )
                    <span style="font-size: 14px; line-height: 1">Для регистрации на вебинар <a href="#login">войдите</a> в аккаунт или <a href="#register">зарегистрируйтесь</a>, если у Вас еще нет аккаунта</span>
                    @else
                    <span>Стоимость вебинара: <strong style="color: #c11515">1$</strong></span><br>
                    <span style="font-size: 14px">После оплаты Вам на почту будут высланы ссылка и пароль на вебинар</span>
                    <?php $unique_id = uniqid('php_');?>
                    <form method="POST" accept-charset="utf-8" action="https://www.liqpay.com/api/3/checkout">
                        <input type="hidden" name="data" value='{{ base64_encode("{\"language\": \"ru\", \"result_url\": \"https://multiversum.in.ua\", \"server_url\": \"https://multiversum.in.ua/webinar\", \"order_id\": \"" . $unique_id . "\", \"description\": \"" . Auth::user()->email . "\", \"amount\": 1, \"currency\": \"USD\", \"action\": \"pay\", \"public_key\": \"i20047806537\"}") }}' />
                        <input type="hidden" name="signature" value='{{ base64_encode( sha1( env('LIQPAY_PRIVATE_KEY') . base64_encode("{\"language\": \"ru\", \"result_url\": \"https://multiversum.in.ua\", \"server_url\": \"https://multiversum.in.ua/webinar\", \"order_id\": \"" . $unique_id . "\", \"description\": \"" . Auth::user()->email . "\", \"amount\": 1, \"currency\": \"USD\", \"action\": \"pay\", \"public_key\": \"i20047806537\"}") . env('LIQPAY_PRIVATE_KEY'), 1 ) ) }}' />
                        <input type="image" src="//static.liqpay.com/buttons/p1ru.radius.png" name="btn_text" />
                    </form>
                    @endif
                </div>
            </div>
            <div class="six columns">
                <ul>
                    <li>
                        <img src="img/lecture.png">
                        <div>
                            <h5>Видео-лекции</h5>
                            <p>Стоимость: <span>1$</span></p>
                            <button data-section-id="payment-section" class="button Category__button">Перейти</button>
                            <div class="clear"></div>
                        </div>
                    </li>
                    {{-- <li>
                        <img src="img/webinar.png">
                        <div>
                            <h5>Вебинары</h5>
                            <p>Стоимость: <span>1$</span></p>
                            <button data-section-id="webinars-section" class="button Category__button">Перейти</button>
                            <div class="clear"></div>
                        </div>
                    </li> --}}
                    <li>
                        <img src="img/livestream.png">
                        <div>
                            <h5>Вебинары в прямом эфире</h5>
                            <p>Стоимость: <span>1$</span></p>
                            <button data-section-id="livestream-section" class="Button Category__button">Перейти</button>
                            <div class="clear"></div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>