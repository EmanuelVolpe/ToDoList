<?php
    function connect()
    {
        $db = new PDO('mysql:host=localhost;' . 'dbname=db_todolist;charset=utf8', 'root', '');
        return $db;
    }

    function getTasks()
    {
        $db = connect();
        $query = $db->prepare('SELECT * FROM tareas');
        $query->execute();
        $tasks = $query->fetchAll(PDO::FETCH_OBJ);
        return $tasks;
    }

    function insertTask($titulo, $descripcion, $prioridad)
    {
        $db = connect();
        $query = $db->prepare('INSERT INTO tareas (titulo, descripcion, prioridad) VALUES (?,?,?)');
        $query->execute([$titulo, $descripcion, $prioridad]);
    }

    function removeTask($id){
        $db = connect();
        $query = $db->prepare('DELETE FROM tareas WHERE id_tarea=?');
        $query->execute([$id]);
    }

    function finalizeTask($id){
        $db = connect();
        $query = $db->prepare('UPDATE tareas SET finalizada = 1 WHERE id_tarea=?');
        $query->execute([$id]);
    }