<?php
require_once './appTareas/smarty/libs/Smarty.class.php';

class tareasView{
    private $smarty;
    
    function __construct(){
        $this->smarty = new Smarty();
    }
    function showHome($tareas){
        foreach ($tareas as $elem) {
            echo "<ul>
                    <li>Titulo: $elem->titulo</li>
                    <li>Descripcion: $elem->descripcion</li>
                    <li>Finalizada: $elem->finalizada</li>
                    <li><a href='info/{$elem->id_tarea}'>+ info</a></li>
                </ul>";
        }

        $this->smarty->assign("prueba", "Valor");
    }

}