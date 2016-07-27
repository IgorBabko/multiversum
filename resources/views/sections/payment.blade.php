{{-- @if ( Auth::user() && !Auth::user()->isPremium() || !Auth::user() ) --}}
{{-- <div class="section section-red centered" id="payment-section"> --}}
@if ( Auth::user() && !Auth::user()->isPremium() || !Auth::user() )
    <div class="container">
        @if ( !Auth::user() )
        <div class="row">
            Для доступа к {{ $item }} пройдите простую регистрацию ниже
            и внесите оплату в размере 1$
        </div>
        <div class="row" style="margin-top: 30px">
            <a class="register-button link-button" href="#register">Регистрация</a>
            <a class="login-button link-button" href="#login">Войти</a>
        </div>
        @else
        <div class="row">
            Для доступа к {{ $item }} внесите оплату в размере 1$
        </div>
        <div class="row account-buttons">
            <?php $unique_id = uniqid('php_');?>
            <form method="POST" accept-charset="utf-8" action="https://www.liqpay.com/api/3/checkout">
                <input type="hidden" name="data" value='{{ base64_encode("{\"language\": \"ru\", \"result_url\": \"https://multiversum.in.ua\", \"server_url\": \"" . $callbackUrl . "\", \"order_id\": \"" . $unique_id . "\", \"description\": \"" . Auth::user()->email . "\", \"amount\": 1, \"currency\": \"UAH\", \"action\": \"pay\", \"public_key\": \"i20047806537\"}") }}' />
                <input type="hidden" name="signature" value='{{ base64_encode( sha1( env('LIQPAY_PRIVATE_KEY') . base64_encode("{\"language\": \"ru\", \"result_url\": \"https://multiversum.in.ua\", \"server_url\": \"" . $callbackUrl . "\", \"order_id\": \"" . $unique_id . "\", \"description\": \"" . Auth::user()->email . "\", \"amount\": 1, \"currency\": \"UAH\", \"action\": \"pay\", \"public_key\": \"i20047806537\"}") . env('LIQPAY_PRIVATE_KEY'), 1 ) ) }}' />
                <input type="image" src="//static.liqpay.com/buttons/p1ru.radius.png" name="btn_text" />
            </form>
        </div>
        @endif
    </div>
@endif
