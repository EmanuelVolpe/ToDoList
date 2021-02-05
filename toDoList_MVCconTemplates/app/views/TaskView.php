<?php
    require_once('libs/smarty/libs/Smarty.class.php');

    class TaskView {

        private $smarty;
    
        function __construct(){
            $this->smarty = new Smarty();
        }

        function showTasks($tasks) {  
            $this->smarty->assign('titulo',"Lista de Tareas");
            $this->smarty->assign('pagina',"ToDoList");
            $this->smarty->assign('tasks', $tasks);
            $this->smarty->display('templates/taskList.tpl');
        }

        function showDetailTask($task) {
            $this->smarty->assign('pagina',"Detalle");
            $this->smarty->assign('titulo',"Detalle de Tarea");
            $this->smarty->assign('task', $task);
            $this->smarty->display('templates/detailTask.tpl');
        }

        function showError($msgError) {
            $this->smarty->assign('pagina',"Error");
            $this->smarty->assign('error',"ERRORRRRRRRRRR");
            $this->smarty->assign('msgError', $msgError);
            $this->smarty->display('templates/error.tpl');
        }
    }