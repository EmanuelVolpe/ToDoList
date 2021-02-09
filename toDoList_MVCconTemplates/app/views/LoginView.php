<?php
require_once('libs/smarty/libs/Smarty.class.php');

class LoginView {

      private $smarty;

      function __construct(){
            $this->smarty = new Smarty();
      }

      function verLogin() {
            $this->smarty->assign('pagina',"Login");
            $this->smarty->assign('titulo',"Pantalla de Login");
            $this->smarty->display('templates/login.tpl');
      }

      function verALta() {
            $this->smarty->assign('pagina',"Alta");
            $this->smarty->assign('titulo',"Formulario de Alta");
            $this->smarty->display('templates/userAlta.tpl');
      }

      function showLoginError($msgError) {
            $this->smarty->assign('pagina',"Error");
            $this->smarty->assign('error',"ERRORRRRRRRRRR");
            $this->smarty->assign('msgError', $msgError);
            $this->smarty->display('templates/errors/loginError.tpl');
        }
}