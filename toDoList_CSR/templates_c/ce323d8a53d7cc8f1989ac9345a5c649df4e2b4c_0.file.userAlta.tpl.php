<?php
/* Smarty version 3.1.38, created on 2021-02-09 21:16:08
  from 'C:\xampp\htdocs\ToDoList\toDoList_MVCconTemplates\templates\userAlta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6022ed8879e4f5_76314732',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce323d8a53d7cc8f1989ac9345a5c649df4e2b4c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ToDoList\\toDoList_MVCconTemplates\\templates\\userAlta.tpl',
      1 => 1612892731,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6022ed8879e4f5_76314732 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
<base href="<?php echo BASE_URL;?>
">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
        crossorigin="anonymous"
    />
    <title><?php echo $_smarty_tpl->tpl_vars['pagina']->value;?>
</title>
</head>

<body>

      <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
      <br>
      <main class="container">
            <form action="insertarUsuario" method="POST" class="container row g-3">
                  <div class="row">
                        <div class="col-md-6">
                              <label for="inputAddress" class="form-label">Usuario</label>
                              <input type="text" class="form-control" name="user" />
                        </div>
                        <div class="col-md-6">
                              <label for="inputAddress" class="form-label">Contraseña</label>
                              <input type="text" class="form-control" name="pass" />
                        </div>
                  </div>
                  <div class="6">
                        <button type="submit" class="btn btn-primary">Alta</button>
                  </div>
            </form>
            <br>
      </main>

      <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
