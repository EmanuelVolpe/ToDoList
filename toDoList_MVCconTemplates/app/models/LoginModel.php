<?php

    class LoginModel {

        private $db;

        function __construct() {
            $this->db = $this->connect();
        }

        private function connect() {
            $db = new PDO('mysql:host=localhost;' . 'dbname=db_todolist;charset=utf8', 'root', '');
            return $db;
        }

        function insertUser($nombre, $contrasenia) {
            $query = $this->db->prepare('INSERT INTO usuarios (nombre, contrasenia) VALUES (?,?)');
            $query->execute([$nombre, $contrasenia]);
        }

        function getUserByName($nombre){
            $query = $this->db->prepare('SELECT * FROM usuarios WHERE nombre=?');
            $query->execute([$nombre]);
            $user = $query->fetch(PDO::FETCH_OBJ);
            return $user;
        }
    }