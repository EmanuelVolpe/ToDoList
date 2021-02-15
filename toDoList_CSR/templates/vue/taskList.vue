{literal}
    <section id="app">
        <ul class="list-group mt-5">
            <li v-for="tarea in tareas" 
                class="list-group-item"
                v-bind:class="{'list-group-item list-group-item-success':tarea.finalizada == 1}">
                {{ tarea.titulo }} - {{ tarea.descripcion }}
            </li>
        </ul>
    </section>
{/literal}