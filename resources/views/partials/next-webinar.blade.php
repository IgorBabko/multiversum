{{-- <div class="six columns">
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
            </div> --}}