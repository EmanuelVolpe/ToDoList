<?php

    class TaskModel {

        private function connect() {
            $db = new PDO('mysql:host=localhost;' . 'dbname=db_todolist;charset=utf8', 'root', '');
            return $db;
        }

        function getTasks() {
            $db = $this->connect();
            $query = $db->prepare('SELECT * FROM tareas');
            $query->execute();
            $tasks = $query->fetchAll(PDO::FETCH_OBJ);
            return $tasks;
        }

        function insertTask($titulo, $descripcion, $prioridad) {
            $db = $this->connect();
            $query = $db->prepare('INSERT INTO tareas (titulo, descripcion, prioridad) VALUES (?,?,?)');
            $query->execute([$titulo, $descripcion, $prioridad]);
        }

        function removeTask($id) {
            $db = $this->connect();
            $query = $db->prepare('DELETE FROM tareas WHERE id_tarea=?');
            $query->execute([$id]);
        }

        function finalizeTask($id) {
            $db = $this->connect();
            $query = $db->prepare('UPDATE tareas SET finalizada = 1 WHERE id_tarea=?');
            $query->execute([$id]);
        }
    }