<?php
      require_once 'libs/Router.php';
      require_once 'app/api/ApiTaskController.php';

      // crea el router
      $router = new Router();

      // define la tabla de ruteo
      $router->addRoute('tareas', 'GET', 'ApiTaskController', 'getAll');
      $router->addRoute('tareas/:ID', 'GET', 'ApiTaskController', 'getTarea');
      $router->addRoute('tareas/:ID', 'DELETE', 'ApiTaskController', 'deleteTarea');
      $router->addRoute('tareas', 'POST', 'ApiTaskController', 'addTarea');
      $router->addRoute('tareas/:ID', 'PUT', 'ApiTaskController', 'updateTarea');

      // rutea
      $router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);