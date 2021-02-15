<?php
/* Smarty version 3.1.38, created on 2021-02-09 21:15:57
  from 'C:\xampp\htdocs\ToDoList\toDoList_MVCconTemplates\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6022ed7d1bef17_49657832',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9bf5ab2eabe65d602763bce32dd7f34baee2a49' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ToDoList\\toDoList_MVCconTemplates\\templates\\header.tpl',
      1 => 1612901412,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6022ed7d1bef17_49657832 (Smarty_Internal_Template $_smarty_tpl) {
?>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
            <a class="navbar-brand">ToDoList</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav d-flex w-100">
                    <li class="nav-item">
                        <a class="nav-link" href="listar">TAREAS</a>
                    </li>
                    <?php if ((isset($_SESSION['nombre']))) {?>
                        <li class="nav-item ml-auto">
                            <a class="nav-link" href="logout"><?php echo $_SESSION['nombre'];?>
 (LOGOUT)</a>
                        </li>
                    <?php }?>
                </ul>
            </div>
        </nav>
    </header>

    <br/><?php }
}
