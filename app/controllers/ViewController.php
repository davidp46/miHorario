<?php
    namespace Controller;
    require_once 'loadView.php';
    use function MiHorario\render;

    class ViewController {
        static function inicio() {
            render('Inicio', 'inicio.php');
        }

        static function acceso() {
            render('Acceso', 'acceso.php');
        }

        static function registro() {
            render('Registro', 'registro.php');
        }

        static function eventos() {
            render('Eventos', 'eventos.php');
        }
    }