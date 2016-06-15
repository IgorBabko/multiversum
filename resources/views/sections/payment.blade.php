@if ( Auth::user() && !Auth::user()->isPremium() || !Auth::user() )
<form action="/payment" method="POST">
    <input type="hidden" name="name" value="igor babko">
    <button type="submit">submit</button>
</form>
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
                <input type="hidden" name="data" value="eyJ2ZXJzaW9uIjozLCJhY3Rpb24iOiJwYXkiLCJwdWJsaWNfa2V5IjoiaTIwMDQ3ODA2NTM3IiwiYW1vdW50IjoiMiIsImN1cnJlbmN5IjoiVUFIIiwiZGVzY3JpcHRpb24iOiLQmtGD0YDRgSIsInR5cGUiOiJidXkiLCJzZXJ2ZXJfdXJsIjoiaHR0cDovL211bHRpdmVyc3VtLm1sL3BheW1lbnQiLCJsYW5ndWFnZSI6InJ1In0=" />
                <input type="hidden" name="signature" value="5lrH7GWW/bGa4u1VVhPr06/5QI4=" />
                <input type="hidden" name="description" value="игорь134234234324324324234" />
                <input type="hidden" name="server_url" value="http://multiversum.ml/payment" />
                <input type="hidden" name="result_url" value="http://multiversum.ml/payment" />
                <input type="image" src="//static.liqpay.com/buttons/p1ru.radius.png" name="btn_text" />
            </form>
                <!--<a class="payment-button link-button" href="/payment">Оплатить</a>-->
            </div>
        @endif
    </div>
</div>
@endif
