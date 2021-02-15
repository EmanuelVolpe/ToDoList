<?php
/* Smarty version 3.1.38, created on 2021-02-15 21:32:28
  from 'C:\xampp\htdocs\ToDoList\toDoList_CSR\templates\vue\taskList.vue' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_602ada5ceeb6f2_73280796',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11ab7644b1d5a1f016d151773380317a0c49bda1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ToDoList\\toDoList_CSR\\templates\\vue\\taskList.vue',
      1 => 1613421146,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_602ada5ceeb6f2_73280796 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <section id="app">
        <ul class="list-group mt-5">
            <li v-for="tarea in tareas" 
                class="list-group-item"
                v-bind:class="{'list-group-item list-group-item-success':tarea.finalizada == 1}">
                {{ tarea.titulo }} - {{ tarea.descripcion }}
            </li>
        </ul>
    </section>
<?php }
}
