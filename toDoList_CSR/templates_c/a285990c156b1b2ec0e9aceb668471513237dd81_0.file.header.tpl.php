<?php
/* Smarty version 3.1.38, created on 2021-02-15 13:58:54
  from 'C:\xampp\htdocs\ToDoList\toDoList_CSR\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_602a700e0ff1f7_70268818',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a285990c156b1b2ec0e9aceb668471513237dd81' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ToDoList\\toDoList_CSR\\templates\\header.tpl',
      1 => 1613393929,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_602a700e0ff1f7_70268818 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <li class="nav-item">
                        <a class="nav-link" href="listar-csr">TAREAS CSR</a>
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
