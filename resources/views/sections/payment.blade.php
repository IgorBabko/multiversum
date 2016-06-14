@if ( Auth::user() && !Auth::user()->isPremium() || !Auth::user() )
<div class="section section-red centered" id="payment-section">
    <div class="container">
        <h2>Оплата</h2>
        @if ( !Auth::user() )
        <div class="row">Для получения полного доступа к курсу пройдите простую регистрацию ниже
            и оплатите курс всего за <span class="price">10 грн<span>
            </div>
            <div class="row account-buttons">
                <a class="register-button link-button" href="#register">Регистрация</a>
                <a class="login-button link-button" href="#login">Войти</a>
            </div>
        @else
            <div class="row">Для получения полного курса внесите оплату в размере <span class="price">10 грн<span></div>
            <div class="row account-buttons">
            <form method="POST" accept-charset="utf-8" action="https://www.liqpay.com/api/3/checkout">
                <input type="hidden" name="data" value="eyJ2ZXJzaW9uIjozLCJhY3Rpb24iOiJwYXkiLCJwdWJsaWNfa2V5IjoiaTIwMDQ3ODA2NTM3IiwiYW1vdW50IjoiMTAiLCJjdXJyZW5jeSI6IlVBSCIsImRlc2NyaXB0aW9uIjoi0JLQuNC00LXQviDQutGD0YDRgSBcIk11bHRpdmVyc3VtXCIiLCJ0eXBlIjoiYnV5Iiwic2VydmVyX3VybCI6Imh0dHA6Ly9tdWx0aXZlcnN1bS5tbCIsImxhbmd1YWdlIjoicnUifQ==" />
                <input type="hidden" name="signature" value="BQHknCP51DyuL+4tp7flId3xiRo=" />
                <input type="hidden" name="public_key" value="i20047806537" />
                <input type="hidden" name="order_id" value="{{ Auth::user()->email }}" />
                <input type="hidden" name="server_url" value="http://multiversum.ml/payment" />
                <input type="hidden" name="result_url" value="http://multiversum.ml" />
                <input type="image" src="//static.liqpay.com/buttons/p1ru.radius.png" name="btn_text" />
            </form>
                <!--<a class="payment-button link-button" href="/payment">Оплатить</a>-->
            </div>
        @endif
    </div>
</div>
@endif
