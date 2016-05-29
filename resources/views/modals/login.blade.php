<div class="remodal" data-remodal-id="login">
    <button data-remodal-action="close" class="remodal-close"></button>
    <h1>Войти</h1>
    <form method="POST" action="/login" class="modal-form">
        <div class="form-group">
            <label for="name">Email</label>
            <input type="email" class="u-full-width" name="email" id="email">
            <span class="error"></span>
        </div>
        <div class="form-group">
            <label for="password">Пароль</label>
            <input type="password" class="u-full-width" name="password" id="password">
            <span class="error"></span>
        </div>
        <div class="modal-actions">
            <button data-remodal-action="cancel" class="remodal-cancel">Назад</button>
            <button class="remodal-confirm" type="submit">Войти</button>
            <i class="fa fa-spinner fa-pulse fa-fw"></i>
        </div>
    </form>
    <br>
</div>
