"use strict";

const formCrearTarea = '#formCrearTarea';

$(function () {
    iniciarComponentes();
    generalidades.validarFormulario(formCrearTarea, enviarDatos);
});

const iniciarComponentes = () => {
    $(".flatpickr-input").flatpickr();

    // Initialize Tagify components on the above inputs
    new Tagify(document.querySelector("#tagEtiquetas"));
}

const enviarDatos = (form) => {
    let formData = new FormData(document.querySelector('#formCrearTarea'));
    
    const config = {
        'method': 'POST',
        'headers': {
            'Accept': generalidades.CONTENT_TYPE_JSON,
        },
        'body': formData
    }

    const success = (response) => {
        if (response.estado == 'success') {
            generalidades.ocultarValidaciones(formCrearTarea);
            window.consultarTareas();
            $('.btnCerrarModal').trigger('click');
            generalidades.resetValidate(formCrearTarea);
        }
        generalidades.ocultarCargando(formCrearTarea);
        generalidades.toastrGenerico(response?.estado, response?.mensaje);
    }

    const error = (response) => {
        generalidades.ocultarCargando(formCrearTarea);
        generalidades.toastrGenerico(response?.estado, response?.mensaje);
        generalidades.mostrarValidaciones(formCrearTarea, response.validaciones);
    }
    const ruta = route("tareas.store");
    generalidades.create(ruta, config, success, error);
    generalidades.mostrarCargando(formCrearTarea);
}