<?php
    include_once 'app/controllers/TaskController.php';
    include_once 'app/controllers/LoginController.php';

    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

    // lee la acción
    if (!empty($_GET['action'])) {
        $action = $_GET['action'];
    } else {
        $action = 'login';
    }

    // parsea la accion
    $params = explode('/', $action);

    // determina que camino seguir según la acción
    switch ($params[0]) {
        case 'login':
            $controller = new LoginController();
            $controller->showLogin();
            break;
        case 'logout':
            $controller = new LoginController();
            $controller->logout();
            break;
        case 'alta':
            $controller = new LoginController();
            $controller->showAlta();
            break;
        case 'insertarUsuario' :
            $controller = new LoginController();
            $controller->addUser();
            break;
        case 'verify':
            $controller = new LoginController();
            $controller->verifyLogin();
            break;
        case 'listar':
            $controller = new TaskController();
            $controller->showTasks();
            break;
        case 'listar-csr':
            $controller = new TaskController();
            $controller->showTasksCSR();
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
        case 'actualizar'://falta acomodarlo para recibir mas de un parametro
            $controller = new TaskController(); 
            $id = $params[1];
            $controller->updateTask($id);
            break;
        case 'detalle':
            $controller = new TaskController(); 
            $id = $params[1];
            $controller->detailTask($id);
            break;
    }

?>