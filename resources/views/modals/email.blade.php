<div class="remodal" data-remodal-id="email">
    <button data-remodal-action="close" class="remodal-close"></button>
    <h1>Написать письмо</h1>
    <form method="POST" action="/email" class="modal-form">
        <div class="six columns">
            <label for="name">Имя</label>
            <input class="u-full-width" type="text" name="name" id="name">
            <span class="error"></span>
        </div>
        <div class="six columns">
            <label for="email">Почта</label>
            <input class="u-full-width" type="email" name="email" id="email">
            <span class="error"></span>
        </div>
        <label for="message">Сообщение</label>
        <textarea class="u-full-width" name="message" id="message"></textarea>
        <span class="error"></span>
        <div class="modal-actions">
            <button data-remodal-action="cancel" class="remodal-cancel">Назад</button>
            <button class="remodal-confirm" type="submit">Отправить</button>
            <i class="fa fa-spinner fa-pulse fa-fw"></i>
        </div>
    </form>
</div>
