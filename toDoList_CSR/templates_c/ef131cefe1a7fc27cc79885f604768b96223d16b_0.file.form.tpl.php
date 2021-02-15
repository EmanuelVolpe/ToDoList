<?php
/* Smarty version 3.1.38, created on 2021-02-15 17:29:17
  from 'C:\xampp\htdocs\ToDoList\toDoList_CSR\templates\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_602aa15dac7892_79787909',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef131cefe1a7fc27cc79885f604768b96223d16b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ToDoList\\toDoList_CSR\\templates\\form.tpl',
      1 => 1613406540,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_602aa15dac7892_79787909 (Smarty_Internal_Template $_smarty_tpl) {
?><form id="formAlta" action="insertar" method="POST" class="container row g-3">
    <div class="row">
        <div class="col-md-9">
            <label for="inputAddress" class="form-label">Titulo</label>
            <input type="text" class="form-control" name="titulo" id="titulo"/>
        </div>

        <div class="col-md-3">
            <label for="inputState" class="form-label">Prioridad</label>
            <select name="prioridad" id="prioridad" class="form-select">
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
        <input type="text" class="form-control" name="descripcion" id="descripcion" />
    </div>

    <div class="col-12">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form><?php }
}
