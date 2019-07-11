<?php
    namespace Controller;
    require_once 'BaseController.php';

    class UserController extends BaseController {
        static function saludar() {
            echo 'Hola mundo';
        }
    }