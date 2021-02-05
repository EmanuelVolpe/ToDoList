<?php

    class TaskModel {

        private $db;

        function __construct() {
            $this->db = $this->connect();
        }

        private function connect() {
            $db = new PDO('mysql:host=localhost;' . 'dbname=db_todolist;charset=utf8', 'root', '');
            return $db;
        }

        function getTasks() {
            $query = $this->db->prepare('SELECT * FROM tareas');
            $query->execute();
            $tasks = $query->fetchAll(PDO::FETCH_OBJ);
            return $tasks;
        }

        function insertTask($titulo, $descripcion, $prioridad) {
            $query = $this->db->prepare('INSERT INTO tareas (titulo, descripcion, prioridad) VALUES (?,?,?)');
            $query->execute([$titulo, $descripcion, $prioridad]);
        }

        function removeTask($id) {
            $query = $this->db->prepare('DELETE FROM tareas WHERE id_tarea=?');
            $query->execute([$id]);
        }

        function finalizeTask($id) {
            $query = $this->db->prepare('UPDATE tareas SET finalizada = 1 WHERE id_tarea=?');
            $query->execute([$id]);
        }

        function getTask($id){
            $query = $this->db->prepare('SELECT * FROM tareas WHERE id_tarea=?');
            $query->execute([$id]);
            $task = $query->fetch(PDO::FETCH_OBJ);
            return $task;
        }
    }