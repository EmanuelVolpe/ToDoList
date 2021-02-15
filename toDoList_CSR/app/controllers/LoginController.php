<?php
include_once "app/models/LoginModel.php"; //incluyo las rutas desde la RAIZ(es propio de PHP)
include_once "app/views/LoginView.php";
include_once "app/views/TaskView.php";

class LoginController {

      private $model;   
      private $view;

      function __construct(){
            $this->model = new LoginModel();
            $this->view = new LoginView();
      }

      function showLogin(){
           $this->view->verLogin();
      }

      function logout() {
            session_start();
            session_destroy();
            header("Location: ".BASE_URL."login");
      }

      function showAlta(){
         $this->view->verAlta();   
      }

      function addUser(){
            $usuario = $_POST["user"];
            $password = $_POST["pass"]; 

            if (empty($usuario) || empty($password)) {
                $this->view->showLoginError("Faltan Datos Obligatorios para el Alta");
                //echo ("<a href='insertar'>VOLVER</a>");
                die();
            }

            $contrasenia = password_hash($password,PASSWORD_DEFAULT);
            $this->model->insertUser($usuario, $contrasenia);
            
      }

      function verifyLogin(){
            $usuario = $_POST["user"];
            $password = $_POST["pass"];
                     
            if (empty($usuario) || empty($password)) {
                $this->view->showLoginError("Faltan Datos Obligatorios para Loguearse");
                die();
            }
            
            $user = $this->model->getUserByName($usuario);
            $hash = $user->contrasenia;

            if ($user && password_verify($password, $hash)){
                  session_start();
                  $_SESSION["id"]= $user->id;
                  $_SESSION["nombre"]= $user->nombre;
                  header("Location: ".BASE_URL."listar");    
            } else {
                  $this->view->showLoginError("Datos Erróneos en Logueo");
                  die();
            }
      }


}