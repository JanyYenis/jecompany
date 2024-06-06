"use strict";

// rutas 
const rutaEditar = "tareas.edit";

// id y clases
const formEditarTarea = "#formEditarTarea";
const seccionEditar = ".seccionEditar";
const modalEditar = "#modalEditarTarea";

$(function () {
    
});

const iniciarComponentes = (form = '') => {
    $(".flatpickr-input").flatpickr();

    // Initialize Tagify components on the above inputs
    new Tagify(document.querySelector("#tagEtiquetasEditar"));
}

$(document).on("click", ".btnEditar", function () {
    let id = $(this).attr("data-id");
    if (id) {
        cargarDatos(id);
    }
});

const cargarDatos = (id) => {
    const ruta = route(rutaEditar, { tarea: id });
    generalidades.mostrarCargando('body');
    generalidades.ejecutar('GET', ruta, 'body', modalEditar, seccionEditar, function(){
        iniciarComponentes(formEditarTarea);
        generalidades.validarFormulario(formEditarTarea, enviarDatos);
    });
}

const enviarDatos = (form) => {
    let formData = new FormData(document.getElementById("formEditarTarea"));
    
    const config = {
        'method': 'PUT',
        'headers': {
            'Accept': generalidades.CONTENT_TYPE_JSON,
        },
        'body': formData
    }

    const success = (response) => {
        if (response.estado == 'success') {
            $('.btnCerrarModal').trigger('click');
            generalidades.ocultarValidaciones(formEditarTarea);
            window.consultarTareas();
        }
        generalidades.ocultarCargando(formEditarTarea);
        generalidades.toastrGenerico(response?.estado, response?.mensaje);
    }

    const error = (response) => {
        generalidades.ocultarCargando(formEditarTarea);
        generalidades.toastrGenerico(response?.estado, response?.mensaje);
        generalidades.mostrarValidaciones(formEditarTarea, response.validaciones);
    }
    const rutaActualizar = route("tareas.update", { tarea: formData.get("id") });
    generalidades.edit(rutaActualizar, config, success, error);
    generalidades.mostrarCargando(formEditarTarea);
}