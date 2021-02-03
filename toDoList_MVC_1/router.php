<?php
    include_once 'app/controllers/TaskController.php';

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
            $controller = new TaskController();
            $controller->showTasks();
            break;
        case 'insertar':
            $controller = new TaskController();
            $controller->addTask();
            break;
        case 'eliminar': 
            $controller = new TaskController();
            $id = $params[1];
            $controller->deleteTask($id);
            break;
        case 'actualizar':
            $controller = new TaskController(); 
            $id = $params[1];
            $controller->updateTask($id);
            break;
        default:
            $controller = new TaskController();
            $controller->mostrarError();
            break;
    }

?>