<?php
    namespace MiHorario;

    function render($title, $page) {
        require_once 'views/includes/header.php';
        require_once 'views/'.$page;
        require_once 'views/includes/footer.php';
    }