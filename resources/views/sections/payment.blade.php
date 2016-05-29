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
                <a class="payment-button link-button" href="/payment">Оплатить</a>
            </div>
        @endif
    </div>
</div>
@endif
