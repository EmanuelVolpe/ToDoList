<?php
/* Smarty version 3.1.38, created on 2021-02-05 01:00:22
  from 'C:\xampp\htdocs\ToDoList\toDoList_MVCconTemplates\templates\taskList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_601c8a9621c014_60983519',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d0b1f011458dc9aabe20fb04a8e89bb7207498d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ToDoList\\toDoList_MVCconTemplates\\templates\\taskList.tpl',
      1 => 1612483168,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:form.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_601c8a9621c014_60983519 (Smarty_Internal_Template $_smarty_tpl) {
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

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <main class="container">

        <?php $_smarty_tpl->_subTemplateRender("file:form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <br>
        <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
        <br/>
            <table class='container table table-success'>
                <thead>
                    <tr>
                        <th>TITULO</th>
                        <th>DESCRIPCION</th>
                        <th>PRIORIDAD</th>
                        <th>FINALIZADA</th>
                        <th>ELIMINAR - FINALIZAR - VER DETALLE</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tasks']->value, 'task');
$_smarty_tpl->tpl_vars['task']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['task']->value) {
$_smarty_tpl->tpl_vars['task']->do_else = false;
?>
                        <tr class='table-active'>
                            <td><?php echo $_smarty_tpl->tpl_vars['task']->value->titulo;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['task']->value->descripcion;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['task']->value->prioridad;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['task']->value->finalizada;?>
</td>
                            <td><a class='btn btn-danger btn-sm' href='eliminar/<?php echo $_smarty_tpl->tpl_vars['task']->value->id_tarea;?>
'>ELIMINAR</a> - 
                                <a class='btn btn-success btn-sm' href='actualizar/<?php echo $_smarty_tpl->tpl_vars['task']->value->id_tarea;?>
'>MODIFICAR</a> - 
                                <a class='btn btn-info btn-sm' href='detalle/<?php echo $_smarty_tpl->tpl_vars['task']->value->id_tarea;?>
'>VER DETALLE</a>
                            </td>
                        </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
    </main>   

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
