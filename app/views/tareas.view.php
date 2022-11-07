<?php
class tareasView{
    
    function showHome($tareas){
        foreach ($tareas as $elem) {
            echo "<ul>
                    <li>Titulo: $elem->titulo</li>
                    <li>Descripcion: $elem->descripcion</li>
                    <li>Finalizada: $elem->finalizada</li>
                    <li><a href='info/{$elem->id_tarea}'>+ info</a></li>
                </ul>";
        }
    }
}