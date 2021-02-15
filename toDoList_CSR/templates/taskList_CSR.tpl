<!DOCTYPE html>
<html lang="en">
<head>
<base href="{BASE_URL}">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
        crossorigin="anonymous"
    />
    <!-- development version, includes helpful console warnings -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <title>{$pagina}</title>
</head>
<body>
    {include "header.tpl"}

    <main class="container">

        <div class="row">
            <div class="col-md-4">
                {include "form.tpl" upload=false}
            </div>
            <div class="col-md-8">
            <h1>LISTA DE TAREAS</h1>
                {include file="vue/taskList.vue"}
                {*<table class='container table table-success'>
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
                        {foreach from=$tasks item=task}
                            <tr class='table-active'>
                                <td>{$task->titulo}</td>
                                <td>{$task->descripcion}</td>
                                <td>{$task->prioridad}</td>
                                <td>{$task->finalizada}</td>
                                <td><a class='btn btn-danger btn-sm' href='eliminar/{$task->id_tarea}'>ELIMINAR</a> - 
                                    <a class='btn btn-success btn-sm' href='actualizar/{$task->id_tarea}'>MODIFICAR</a> - 
                                    <a class='btn btn-info btn-sm' href='detalle/{$task->id_tarea}'>VER DETALLE</a>
                                </td>
                            </tr>
                        {/foreach}
                    </tbody>
                </table>*}
            </div>
        </div>
    </main>

    <script src="js/tasks.js"></script>
    {include "footer.tpl"}
