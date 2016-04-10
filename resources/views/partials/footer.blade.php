<footer class="footer">
    <div class="footer__content">
        <div>
            <form action="/subscribe" method="POST">
                {{ csrf_field() }}
                <input type="email" name="email" class="Input Input--subscription" placeholder="Ваш email"><button type="submit" class="Button Button--subscription">подписка</button>
            </form>
        </div>
        <ul class="Social">
            <li class="Social__item"><a class="Social__link Social__link--facebook" href="https://www.facebook.com/profile.php?id=100006293505911&fref=nf" target="_blank"><i class="fa fa-facebook Social__icon"></i></a></li>
            <li class="Social__item"><a class="Social__link Social__link--youtube" href="https://www.youtube.com/channel/UCZuPMVsytT-L-HVTAquUaCA" target="_blank"><i class="fa fa-youtube Social__icon"></i></a></li>
            <li class="Social__item"><a class="Social__link Social__link--google" href="https://plus.google.com/109801612189366894181" target="_blank"><i class="fa fa-google-plus Social__icon"></i></a></li>
        </ul>
        <div>
            <div>
                <a class="logo logo__footer" href="/">Multiversum</a><br>
                <span class="footer__copyright">&copy; Все права защищены</span>
            </div>
        </div>
    </div>
</footer>
