<?php
include_once 'db.php';

function showTasks()
{
    include_once 'templates/header.php';
    include_once 'templates/form.php';
    $tasks = getTasks();
    //print_r($tasks);

    echo "<h1>Lista de Tareas</h1>
            <br />

            <table class='container table table-success'>
                <thead>
                    <tr>
                    <th>TITULO</th>
                    <th>DESCRIPCION</th>
                    <th>PRIORIDAD</th>
                    <th>FINALIZADA</th>
                    <th>ACCION</th>
                    </tr>
                </thead>
                <tbody>";
    foreach ($tasks as $task) {
        echo "<tr class='table-active'>
                                <td>$task->titulo</td>
                                <td>$task->descripcion</td>
                                <td>$task->prioridad</td>
                                <td>$task->finalizada</td>
                                <td><a class='btn btn-danger btn-sm' href='eliminar/$task->id_tarea'>ELIMINAR</a>  <a class='btn btn-success btn-sm' href='actualizar/$task->id_tarea'>MODIFICAR</a></td>
                            </tr>";
    }
    echo "</tbody></table>";

    include_once 'templates/footer.php';
}

function addTask()
{
    $titulo = $_POST["titulo"];
    $descripcion = $_POST["descripcion"];
    $prioridad = $_POST["prioridad"];

    if (empty($titulo) || empty($descripcion) || empty($prioridad)) {
        echo ("<h2>Faltan datos obligatorios</h2>");
        //echo ("<a href='insertar'>VOLVER</a>");
        die();
    }

    insertTask($titulo, $descripcion, $prioridad);
    header("Location: " . BASE_URL);
}

function deleteTask($id)
{
    removeTask($id);
    header("Location: " . BASE_URL);  
}

function updateTask($id){
    finalizeTask($id);
    header("Location: " . BASE_URL);
}