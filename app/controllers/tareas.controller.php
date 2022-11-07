<?php

require_once './app/models/tareas.model.php';
require_once './app/views/tareas.view.php';

class tareasController{
    private $tareasModel;
    private $tareasViews;

    function __construct(){
        $this->tareasModel = new tareasModel();
        $this->tareasViews = new tareasView();
    }

    function showTareas(){
        $tareas = $this->tareasModel->getAll();
        $this->tareasViews->showHome($tareas);

    }
}