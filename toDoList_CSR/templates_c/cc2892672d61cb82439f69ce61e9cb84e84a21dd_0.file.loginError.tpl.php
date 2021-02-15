<?php
/* Smarty version 3.1.38, created on 2021-02-08 18:00:07
  from 'C:\xampp\htdocs\ToDoList\toDoList_MVCconTemplates\templates\errors\loginError.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60216e172a7f48_05932134',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc2892672d61cb82439f69ce61e9cb84e84a21dd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ToDoList\\toDoList_MVCconTemplates\\templates\\errors\\loginError.tpl',
      1 => 1612803597,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60216e172a7f48_05932134 (Smarty_Internal_Template $_smarty_tpl) {
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

    <a class='btn btn-primary btn-sm float-right' href='login'>VOLVER</a>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
