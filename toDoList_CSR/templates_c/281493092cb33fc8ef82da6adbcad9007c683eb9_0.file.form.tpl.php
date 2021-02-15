<?php
/* Smarty version 3.1.38, created on 2021-02-06 18:17:59
  from 'C:\xampp\htdocs\ToDoList\toDoList_MVCconTemplates\templates\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_601ecf4732aae0_64692455',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '281493092cb33fc8ef82da6adbcad9007c683eb9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ToDoList\\toDoList_MVCconTemplates\\templates\\form.tpl',
      1 => 1612631558,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_601ecf4732aae0_64692455 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="insertar" method="POST" class="container row g-3">
    <div class="row">
        <div class="col-md-9">
            <label for="inputAddress" class="form-label">Titulo</label>
            <input type="text" class="form-control" name="titulo" />
        </div>

        <div class="col-md-3">
            <label for="inputState" class="form-label">Prioridad</label>
            <select name="prioridad" class="form-select">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
    </div>

    <div class="col-11">
        <label for="inputAddress2" class="form-label">Descripcion</label>
        <input type="text" class="form-control" name="descripcion" />
    </div>

    <div class="col-12">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form><?php }
}
