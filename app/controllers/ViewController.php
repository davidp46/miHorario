<?php
    namespace Controller;
    require_once 'BaseController.php';

    class ViewController extends BaseController {
        static function inicio() {
            require_once 'views/inicio.php';
        }

        static function acceso() {
            require_once 'views/acceso.php';
        }
    }