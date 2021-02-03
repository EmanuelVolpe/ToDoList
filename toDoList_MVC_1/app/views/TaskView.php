<?php

class TaskView {
    
    function showTasks($tasks) {

        include_once 'templates/header.php';
        include_once 'templates/form.php';
        //print_r($tasks);

        echo "<h1>Lista de Tareas</h1>
                <br/>
                <table class='container table table-success'>
                    <thead>
                        <tr>
                            <th>TITULO</th>
                            <th>DESCRIPCION</th>
                            <th>PRIORIDAD</th>
                            <th>FINALIZADA</th>
                            <th>ELIMINAR - FINALIZAR</th>
                        </tr>
                    </thead>
                    <tbody>";
        foreach ($tasks as $task) {
            echo "<tr class='table-active'>
                                    <td>$task->titulo</td>
                                    <td>$task->descripcion</td>
                                    <td>$task->prioridad</td>
                                    <td>$task->finalizada</td>
                                    <td><a class='btn btn-danger btn-sm' href='eliminar/$task->id_tarea'>ELIMINAR</a> - <a class='btn btn-success btn-sm' href='actualizar/$task->id_tarea'>MODIFICAR</a></td>
                                </tr>";
        }
        echo "</tbody></table>";

        include_once 'templates/footer.php';
    }

    function showError($msgError) {
        echo ("<h2>Error</h2>");
        echo ("<h2>$msgError</h2>");
    }
}