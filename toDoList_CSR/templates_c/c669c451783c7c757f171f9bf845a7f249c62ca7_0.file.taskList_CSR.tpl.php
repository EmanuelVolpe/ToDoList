<?php
/* Smarty version 3.1.38, created on 2021-02-15 21:19:18
  from 'C:\xampp\htdocs\ToDoList\toDoList_CSR\templates\taskList_CSR.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_602ad7464b2796_68092786',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c669c451783c7c757f171f9bf845a7f249c62ca7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ToDoList\\toDoList_CSR\\templates\\taskList_CSR.tpl',
      1 => 1613420297,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:form.tpl' => 1,
    'file:vue/taskList.vue' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_602ad7464b2796_68092786 (Smarty_Internal_Template $_smarty_tpl) {
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
    <!-- development version, includes helpful console warnings -->
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"><?php echo '</script'; ?>
>
    <title><?php echo $_smarty_tpl->tpl_vars['pagina']->value;?>
</title>
</head>
<body>
    <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <main class="container">

        <div class="row">
            <div class="col-md-4">
                <?php $_smarty_tpl->_subTemplateRender("file:form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('upload'=>false), 0, false);
?>
            </div>
            <div class="col-md-8">
            <h1>LISTA DE TAREAS</h1>
                <?php $_smarty_tpl->_subTemplateRender("file:vue/taskList.vue", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                            </div>
        </div>
    </main>

    <?php echo '<script'; ?>
 src="js/tasks.js"><?php echo '</script'; ?>
>
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
