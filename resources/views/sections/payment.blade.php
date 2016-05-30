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
                    <input type="hidden" name="data" value="eyJ2ZXJzaW9uIjozLCJhY3Rpb24iOiJwYXkiLCJwdWJsaWNfa2V5IjoiaTMwNzcxOTUzNDA0IiwiYW1vdW50IjoiMTAiLCJjdXJyZW5jeSI6IlVBSCIsImRlc2NyaXB0aW9uIjoi0JrRg9GA0YEg0LvQtdC60YbQuNC5IiwidHlwZSI6ImJ1eSIsInNlcnZlcl91cmwiOiJodHRwOi8vbXVsdGl2ZXJzdW0ubWwiLCJsYW5ndWFnZSI6InJ1In0=" />
                    <input type="hidden" name="signature" value="1dO4H/6f0D17m7DlPQFP4xmvNbE=" />
                    <input type="image" src="//static.liqpay.com/buttons/p1ru.radius.png" name="btn_text" />
                </form>
                <!--<a class="payment-button link-button" href="/payment">Оплатить</a>-->
            </div>
        @endif
    </div>
</div>
@endif
