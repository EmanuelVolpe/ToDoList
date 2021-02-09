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

        function getLogged(){
            session_start();
            if(!isset($_SESSION["id"])){
                header("Location: ".BASE_URL."login");
                die();
            }
        }
        
        function showTasks() {
            $this->getLogged();
            $tasks = $this->model->getTasks();
            $this->view->showTasks($tasks);
        }

        function addTask() {
            $titulo = $_POST["titulo"];
            $descripcion = $_POST["descripcion"];
            $prioridad = $_POST["prioridad"];

            if (empty($titulo) || empty($descripcion) || empty($prioridad)) {
                $this->view->showTaskError("Faltan Datos Obligatorios");
                //echo ("<a href='insertar'>VOLVER</a>");
                die();
            }

            $this->model->insertTask($titulo, $descripcion, $prioridad);
            header("Location: ".BASE_URL."listar");
        }

        function deleteTask($id) {
            $this->model->removeTask($id);
            header("Location: ".BASE_URL."listar");  
        }

        function updateTask($id) {
            $this->model->finalizeTask($id);
            header("Location: ".BASE_URL."listar");
        }

        function detailTask($id) {
            $task = $this->model->getTask($id);
            $this->view->showDetailTask($task);
        }
        
    }