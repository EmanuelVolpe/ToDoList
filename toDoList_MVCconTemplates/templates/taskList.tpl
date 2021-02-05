{include "header.tpl"}

    <h1>Lista de Tareas</h1>
    <br/>
        <table class='container table table-success'>
            <thead>
                <tr>
                    <th>TITULO</th>
                    <th>DESCRIPCION</th>
                    <th>PRIORIDAD</th>
                    <th>FINALIZADA</th>
                    <th>ELIMINAR - FINALIZAR</th>
                </tr>
            </thead>
            <tbody>
                {foreach from=$tasks item=$task} {
                    <tr class='table-active'>
                            <td>$task->titulo</td>
                            <td>$task->descripcion</td>
                            <td>$task->prioridad</td>
                            <td>$task->finalizada</td>
                            <td><a class='btn btn-danger btn-sm' href='eliminar/$task->id_tarea'>ELIMINAR</a> - <a class='btn btn-success btn-sm' href='actualizar/$task->id_tarea'>MODIFICAR</a></td>
                    </tr>
                {/foreach}
            </tbody>
        </table>";

{include "footer.tpl"}