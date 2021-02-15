<?php
require_once 'app/models/TaskModel.php';
require_once "app/api/ApiView.php";

class ApiTaskController{
      private $model;
      private $view;
      private $data;
      
      public function __construct() {
            $this->model = new TaskModel();
            $this->view = new ApiView();
            $this->data = file_get_contents("php://input");
      }

      
      public function getAll($params = []) {
            $tareas = $this->model->getTasks();
            //var_dump($tareas);
            return $this->view->response($tareas, 200);
      }
      
      public function getTarea($params = []) {
            $idTarea = $params[":ID"];
            $tarea = $this->model->getTask($idTarea);
            if($tarea){
                  return $this->view->response($tarea,200);
            }else{
                  return $this->view->response("La tarea con ID {$idTarea} no existe", 404); 
            }  
      }
      
      public function deleteTarea($params = []) {
            $idTarea = $params[':ID'];
            $tarea = $this->model->getTask($idTarea);
            if ($tarea) {
                  $this->model->removeTask($idTarea);
                  $this->view->response("La Tarea con ID {$idTarea} ha sido eliminada con éxito", 200);
            }else{
                  $this->view->response("La tarea con ID {$idTarea} no existe", 404);
            }
      }

      public function getData(){
            return json_decode($this->data);
      }

      public function addTarea($params = []) {
            // devuelve el objeto JSON enviado por POST
            $body = $this->getData();
            //inserta la tarea
            $titulo = $body->titulo;
            $descripcion = $body->descripcion;
            $prioridad = $body->prioridad;

            if(empty($prioridad) || $prioridad < "1" || $prioridad > "5"){
                  $this->view->response("No se pudo agregar la tarea", 404);
                  die();
            }

            $idTarea = $this->model->insertTask($titulo, $descripcion, $prioridad);

            if ($idTarea > 0) {
                  $this->view->response("La Tarea con ID {$idTarea} se agregó exitosamente", 200);
            }else{
                  $this->view->response("No se pudo agregar la tarea", 500);
            }
      }

      public function updateTarea($params = []) {
            $idTarea = $params[':ID'];
            $tarea = $this->model->getTask($idTarea);
            if ($tarea) {
                  $body = $this->getData();
                  $titulo = $body->titulo;
                  $descripcion = $body->descripcion;
                  $prioridad = $body->prioridad;
                  $tarea = $this->model->updateTask($titulo, $descripcion, $prioridad, $idTarea);
                  $this->view->response("Tarea con ID {$idTarea} actualizada con exito", 200);
            } else {
                  $this->view->response("Tarea con ID {$idTarea} no se pudo actualizar", 404);
            }
      }


}