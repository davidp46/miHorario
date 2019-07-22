<?php
    require_once 'app/controllers/UserController.php';
    use Controller\UserController;
?>
<div class="container margin_top">
    <form class="container_form margin_top_large" id="form_login">
        <h3>Crea tu cuenta</h4>
        <div class="field">
            <input type="text">
            <label class="label">Nombre</label>
            <div id="error_message1" class="error_message"></div>
        </div>
        <div class="field margin_top">
            <input type="text">
            <label class="label">Correo electrónico</label>
            <div id="error_message2" class="error_message"></div>
        </div>
        <div class="field margin_top">
            <input type="text">
            <label class="label">Nombre de usuario</label>
            <div id="error_message3" class="error_message"></div>
        </div>
        <div class="field margin_top">
            <input type="text">
            <label class="label">Ocupación</label>
            <div id="error_message4" class="error_message"></div>
        </div>
        <div class="field margin_top">
            <input type="password">
            <label class="label">Contraseña</label>
            <div id="error_message5" class="error_message"></div>
        </div>
        <div class="field margin_top">
            <input type="password">
            <label class="label">Confirmar contraseña</label>
            <div id="error_message6" class="error_message"></div>
        </div>
        <div class="flex_end margin_top">
            <button type="submit" class="btn margin_top">Registrarse</button>
        </div>
    </form>
</div>
<script src="resources/js/field_effect.js"></script>