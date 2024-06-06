"use strict";

const formCrearQr = '#formCrearQr';

$(function () {
    iniciarComponentes();
    generalidades.validarFormulario(formCrearQr, enviarDatos);
});

const iniciarComponentes = () => {
    $(".flatpickr-input").flatpickr();

    // Initialize Tagify components on the above inputs
    new Tagify(document.querySelector("#tagEtiquetas"));
}

const enviarDatos = (form) => {
    let formData = new FormData(document.querySelector('#formCrearQr'));
    
    const config = {
        'method': 'POST',
        'headers': {
            'Accept': generalidades.CONTENT_TYPE_JSON,
        },
        'body': formData
    }

    const success = (response) => {
        if (response.estado == 'success') {
            generalidades.ocultarValidaciones(formCrearQr);
            if (response?.html) {
                $('.seccionQR').html(response?.html);
            }
        }
        generalidades.ocultarCargando(formCrearQr);
        generalidades.toastrGenerico(response?.estado, response?.mensaje);
    }

    const error = (response) => {
        generalidades.ocultarCargando(formCrearQr);
        generalidades.toastrGenerico(response?.estado, response?.mensaje);
        generalidades.mostrarValidaciones(formCrearQr, response.validaciones);
    }
    const ruta = route("qr.generarQr");
    generalidades.create(ruta, config, success, error);
    generalidades.mostrarCargando(formCrearQr);
}