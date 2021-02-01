<?php
include_once "db.php";

function showTasks(){
      include_once 'templates/header.php';
      include_once 'templates/formAlta.php';

      $tasks = getTasks();

      echo"<table class='container table table-success'>
            <thead>
                  <tr>
                        <th>TITULO</th>
                        <th>DESCRIPCION</th>
                        <th>PRIORIDAD</th>
                        <th>FINALIZADA</th>
                  </tr>
            </thead>
            <tbody>";
            foreach($tasks as $task){
                  echo "<tr class='table-active'>
                              <td>$task->titulo</td>
                              <td>$task->descripcion</td>
                              <td>$task->prioridad</td>
                              <td>$task->finalizada</td>
                        </tr>";
            }
            echo"</tbody>";
      echo"</table>";


      include_once 'templates/footer.php';
}

function addTask(){
      $titulo = $_POST["titulo"];
      $descripcion = $_POST["descripcion"];
      $prioridad = $_POST["prioridad"];
     if (empty($titulo) || empty($descripcion) || empty($prioridad)){
           echo("<h2>Faltan datos obligatorios</h2>");
           die();
     }
     insertTask($titulo, $descripcion, $prioridad);
     header("Location: " . BASE_URL);
}