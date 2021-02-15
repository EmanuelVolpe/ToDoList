"use strict";

const lista = new Vue({
  el: '#app',
  data: {
    tareas:[] //esto es como un assihn de smarty
  }
})

document.addEventListener('DOMContentLoaded', e => {
    getTasks();

    document.querySelector("#formAlta").addEventListener('submit', e => {
        e.preventDefault();
        addTask();
    });
});


    async function getTasks(){
        try {
            const response = await fetch('api/tareas/');
            const tareas = await response.json();
            //renderTaks(tareas);
            lista.tareas = tareas;
            
        } catch (error) {
            console.log(error);
        }
    }

    async function addTask(){
        
        const tarea = {
            titulo: document.querySelector("#titulo").value,
            descripcion: document.querySelector("#descripcion").value,
            prioridad: document.querySelector("#prioridad").value,
            finalizada: "0"
        }

        try {
            const response = await fetch('api/tareas/', {
                    method: 'POST',
                    headers: {'Content-Type': 'application/json'},
                    body: JSON.stringify(tarea)  
            });
            const t = await response.json();
            lista.tareas.push(t);
        } catch (error) {
            console.log(error);
        }
    }

    /*function renderTaks(tareas){
        const lista = document.querySelector("#lista");
        lista.innerHTML = '';

        tareas.forEach(tarea => {
            if (tarea.finalizada == 1)
                lista.innerHTML += '<li class="list-group-item list-group-item-success">'+ tarea.titulo + " - " +  tarea.descripcion + '</li>';
            else
                lista.innerHTML += '<li class="list-group-item">'+ tarea.titulo + " - " +  tarea.descripcion + '</li>';
        });
    }*/

