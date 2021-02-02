<?php
    include_once 'app/tasks.php';

    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

    // lee la acción
    if (!empty($_GET['action'])) {
        $action = $_GET['action'];
    } else {
        $action = 'listar';
    }

    // parsea la accion
    $params = explode('/', $action);

    // determina que camino seguir según la acción
    switch ($params[0]) {
        case 'listar': 
            showTasks();
            break;
        case 'insertar': 
            addTask();
            break;
        case 'eliminar': 
            $id = $params[1];
            deleteTask($id);
            break;
        case 'actualizar': 
            $id = $params[1];
            updateTask($id);
            break;
        default: 
            echo('404 Page not found'); 
            break;
    }

?>