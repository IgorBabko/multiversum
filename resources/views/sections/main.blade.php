<div class="section section-main" id="about-section">
    <div>
        <main class="row" id="promo-section">
            <div>
                <div>
                    <h2 class="main-heading" style="color: white">Ментально-духовное развитие </h2>
                </div>
                <div style="display: flex; justify-content: center; align-items: center">
                    <div>
                        <!--<h3 class="main-heading subheading" style="text-align: center; margin-bottom: 10px; color: beige">О курсе</h3>-->
                        <video id="my-video" class="video-js" controls preload="auto" width="640" height="480"
                        poster="MY_VIDEO_POSTER.jpg" data-setup="{}">
                            <source src="https://s3.eu-central-1.amazonaws.com/multiversum/%D0%B2%D1%81%D1%82%D1%83%D0%BF%D0%BB%D0%B5%D0%BD%D0%B8%D0%B5+%D0%BA+%D0%BA%D1%83%D1%80%D1%81%D1%83+%D0%BC%D0%B5%D0%BD%D1%82%D0%B0%D0%BB%D1%8C%D0%BD%D0%BE-%D0%B4%D1%83%D1%85%D0%BE%D0%B2%D0%BD%D0%BE%D0%B3%D0%BE+%D1%80%D0%B0%D0%B7%D0%B2%D0%B8%D1%82%D0%B8%D1%8F.mp4"
                            type='video/mp4'>
                                <source src="MY_VIDEO.webm" type='video/webm'>
                                    <p class="vjs-no-js">
                                        Для просмотра этого видео, пожалуйста, включите поддержку JavaScript и, желательно,
                                        обновите Ваш браузер
                                        <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                                    </p>
                        </video>
                    </div>
                    <div>
                        <div class="main-questions">
                            <span>Ближайший вебинар: <strong style="color: #c11515">"Тема вебинара"</strong></span><br>
                            <span>Дата: <strong style="color: #c11515">10.07.16</strong></span><br>
                            @if ( ! Auth::user() )
                                <span style="font-size: 14px">Для регистрации на вебинар <a href="#login">войдите</a> в аккаунт</span>
                            @else
                                <span style="font-size: 14px">После оплаты Вам на почту будут высланы ссылка и пароль на вебинар</span>
                                <?php $unique_id = uniqid('php_'); ?> 
                                <form method="POST" accept-charset="utf-8" action="https://www.liqpay.com/api/3/checkout">
                                    <input type="hidden" name="data" value='{{ base64_encode("{\"language\": \"ru\", \"result_url\": \"http://multiversum.ml\", \"server_url\": \"http://multiversum.ml/payment\", \"order_id\": \"" . $unique_id . "\", \"description\": \"" . Auth::user()->email . "\", \"amount\": 1, \"currency\": \"USD\", \"action\": \"pay\", \"public_key\": \"i20047806537\"}") }}' />
                                    <input type="hidden" name="signature" value='{{ base64_encode( sha1( env('LIQPAY_PRIVATE_KEY') . base64_encode("{\"language\": \"ru\", \"result_url\": \"http://multiversum.ml\", \"server_url\": \"http://multiversum.ml/payment\", \"order_id\": \"" . $unique_id . "\", \"description\": \"" . Auth::user()->email . "\", \"amount\": 1, \"currency\": \"USD\", \"action\": \"pay\", \"public_key\": \"i20047806537\"}") . env('LIQPAY_PRIVATE_KEY'), 1 ) ) }}' />
                                    <input type="image" src="//static.liqpay.com/buttons/p1ru.radius.png" name="btn_text" />
                                </form>
                            @endif
                        </div>
              <!--          <img style="box-shadow: 0 5px 10px 0px #464646; margin-left: 50px" src="img/quote.jpg">-->
                            <!--<ul class="main-questions">
                                <li>в чем смысл жизни?</li>
                                <li>что такое судьба?</li>
                                <li>Что есть Я?</li>
                            </ul>-->
                </div>
        </main>
        </div>
    </div>
