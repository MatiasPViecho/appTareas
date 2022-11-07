<?php

require_once './app/controllers/tareas.controller.php';

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

// lee la acción
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home'; 
}

$tareasController = new tareasController();

$params = explode('/', $action);

switch($params[0]){
    case 'home';
    $tareasController->showTareas();
    break;
    default:
    echo 'hubo un error';
    break;

}