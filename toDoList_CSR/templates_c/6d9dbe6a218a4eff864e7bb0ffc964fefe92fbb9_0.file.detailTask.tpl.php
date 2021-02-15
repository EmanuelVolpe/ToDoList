<?php
/* Smarty version 3.1.38, created on 2021-02-05 01:27:27
  from 'C:\xampp\htdocs\ToDoList\toDoList_MVCconTemplates\templates\detailTask.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_601c90ef214f44_11002039',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d9dbe6a218a4eff864e7bb0ffc964fefe92fbb9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ToDoList\\toDoList_MVCconTemplates\\templates\\detailTask.tpl',
      1 => 1612484824,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_601c90ef214f44_11002039 (Smarty_Internal_Template $_smarty_tpl) {
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

    <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>


    <table class='container table table-bordered table-striped'>
        <tbody>
            <tr>
                <td class="col-md-2">Titulo</td>
                <td class="col-md-10"><?php echo $_smarty_tpl->tpl_vars['task']->value->titulo;?>
</td
            </tr>
            <tr>
                <td class="col-md-2">Descripcion</td>
                <td class="col-md-10"><?php echo $_smarty_tpl->tpl_vars['task']->value->descripcion;?>
</td
            </tr>
            <tr>
                <td class="col-md-2">Prioridad</td>
                <td class="col-md-10"><?php echo $_smarty_tpl->tpl_vars['task']->value->prioridad;?>
</td
            </tr>
            <tr>
                <td class="col-md-2">Estado</td>
                <?php if ($_smarty_tpl->tpl_vars['task']->value->finalizada == "1") {?>
                    <td class="col-md-10">Tarea Finalizada</td
                <?php } else { ?>
                    <td class="col-md-10">Tarea sin Finzalizar</td
                <?php }?>
            </tr>
        </tbody>
    </table>

    <a class='btn btn-primary btn-sm float-right' href='listar'>VOLVER</a>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
