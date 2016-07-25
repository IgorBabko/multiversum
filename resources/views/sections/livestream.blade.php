<div class="section-light-green" id="livestream-section">
    <div class="container">
        <h3 style="text-align: center; color: #0b4975">Ближайший вебинар</h3>
        <div class="row centered">
            <div class="six columns">
                <img class="webinar-icon" src="img/livestream.png">
            </div>
            <div class="six columns">
                <div class="main-questions" style="margin: 70px 0 0 0; background: white; width: 400px">
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
        </div>
    </div>
</div>