<?php
    namespace Core;

    require_once 'app/controllers/ViewController.php';
    use Controller\ViewController;

    $peticion = $_GET['page'];
    $existe = False;

    if(!empty($peticion)) {
        $routes = array(
            'inicio',
            'acceso'
        );
        foreach ($routes as $view) {
            if($peticion == $view) {
                ViewController::$view();
                $existe = True;
                break;
            }
        }
        # La ruta no existe
        if($existe == False) {
            header('Location: ./');    
        }
    }else {
        header('Location: ./');
    }