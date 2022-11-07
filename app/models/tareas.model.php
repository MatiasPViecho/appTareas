<?php

class tareasModel{
    private $db;

    function __construct(){
        $this->connect();
    }
    function connect(){
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_tareas;charset=utf8', 'root', '');
    }

    function getAll(){
        $query = $this->db->prepare('SELECT * FROM tareas');
        $query->execute();

        $result = $query->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }
}