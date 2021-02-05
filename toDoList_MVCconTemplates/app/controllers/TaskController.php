<?php
    include_once "app/models/TaskModel.php"; //incluyo las rutas desde la RAIZ(es propio de PHP)
    include_once "app/views/TaskView.php";

    class TaskController {

        private $model;
        private $view;

        function __construct(){
            $this->model = new TaskModel();
            $this->view = new TaskView();
        }
        
        function showTasks(){
            $tasks = $this->model->getTasks();
            $this->view->showTasks($tasks);
        }

        function addTask() {
            $titulo = $_POST["titulo"];
            $descripcion = $_POST["descripcion"];
            $prioridad = $_POST["prioridad"];

            if (empty($titulo) || empty($descripcion) || empty($prioridad)) {
                $this->view->showError("Faltan Datos Obligatorios");
                //echo ("<a href='insertar'>VOLVER</a>");
                die();
            }

            $this->model->insertTask($titulo, $descripcion, $prioridad);
            header("Location: " . BASE_URL);
        }

        function deleteTask($id) {
            $this->model->removeTask($id);
            header("Location: " . BASE_URL);  
        }

        function updateTask($id) {
            $this->model->finalizeTask($id);
            header("Location: " . BASE_URL);
        }

        function mostrarError() {
            $this->view->showError('404 Page not found');
        }
        
    }