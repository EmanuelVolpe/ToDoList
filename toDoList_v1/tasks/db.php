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

function insertTask($titulo, $descripcion, $prioridad){
      $db = connect();
      $query = $db->prepare('INSERT INTO tareas (titulo, descripcion, prioridad) VALUES (?,?,?)');
      $query->execute([$titulo, $descripcion, $prioridad]);
}
