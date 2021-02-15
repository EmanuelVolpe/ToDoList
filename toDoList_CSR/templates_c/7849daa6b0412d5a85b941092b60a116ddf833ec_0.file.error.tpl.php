<?php
/* Smarty version 3.1.38, created on 2021-02-05 01:04:04
  from 'C:\xampp\htdocs\ToDoList\toDoList_MVCconTemplates\templates\error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_601c8b74bcfb84_12629000',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7849daa6b0412d5a85b941092b60a116ddf833ec' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ToDoList\\toDoList_MVCconTemplates\\templates\\error.tpl',
      1 => 1612483429,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_601c8b74bcfb84_12629000 (Smarty_Internal_Template $_smarty_tpl) {
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

    <h1><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h1>
    <h2><?php echo $_smarty_tpl->tpl_vars['msgError']->value;?>
</h2>

    <a class='btn btn-primary btn-sm float-right' href='listar'>VOLVER</a>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
