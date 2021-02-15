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
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <title>{$pagina}</title>
</head>

{include "header.tpl"}

    <h1>{$titulo}</h1>

{*<h2>Titulo: {$task->titulo}</h2>
<h2>Descripcion: {$task->descripcion}</h2>
<h2>Prioridad: {$task->prioridad}</h2>
<h2>Estado: {$task->finalizada}</h2>*}

    <table class='container table table-bordered table-striped'>
        <tbody>
            <tr>
                <td class="col-md-2">Titulo</td>
                <td class="col-md-10">{$task->titulo}</td
            </tr>
            <tr>
                <td class="col-md-2">Descripcion</td>
                <td class="col-md-10">{$task->descripcion}</td
            </tr>
            <tr>
                <td class="col-md-2">Prioridad</td>
                <td class="col-md-10">{$task->prioridad}</td
            </tr>
            <tr>
                <td class="col-md-2">Estado</td>
                {if $task->finalizada == "1"}
                    <td class="col-md-10">Tarea Finalizada</td
                {else}
                    <td class="col-md-10">Tarea sin Finzalizar</td
                {/if}
            </tr>
        </tbody>
    </table>

    <a class='btn btn-primary btn-sm float-right' href='listar'>VOLVER</a>

{include "footer.tpl"}
