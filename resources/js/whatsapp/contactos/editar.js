"use strict";

// rutas 
const rutaEditar = "whatsapp.contactos.edit";

// id y clases
const formEditarContacto = "#formEditarContacto";
const seccionEditar = "#seccionEditar";
const modalEditar = "#modalEditarMedicos";

$(function () {
    generalidades.validarFormulario(formEditarContacto, enviarDatos);
});

const iniciarComponentes = (form = '') => {
    $(`${form} #selectEtiquitaEdit`).select2();
    $(`${form} #selectGenero`).select2();
    $(`${form} #tipo_identificacion`).select2();

    Inputmask({
        mask: "*{1,20}[.*{1,20}][.*{1,20}][.*{1,20}]@*{1,20}[.*{2,6}][.*{1,2}]",
        greedy: false,
        onBeforePaste: function (pastedValue, opts) {
            pastedValue = pastedValue.toLowerCase();
            return pastedValue.replace("mailto:", "");
        },
        definitions: {
            "*": {
                validator: '[0-9A-Za-z!#$%&"*+/=?^_`{|}~\-]',
                cardinality: 1,
                casing: "lower"
            }
        }
    }).mask("#inputEmailEdit");

    generalidades.initTelefonoInput(`${form} #telEdit`);
}

$(document).on("click", ".editarContacto", function () {
    let id = $(this).attr("data-contacto");
    if (id) {
        cargarDatos(id);
    }
});

$(document).on('shown.bs.modal', '#modalEditarMedicos', function () {
    let element = document.querySelector("#kt_stepper_example_clickable_edit");
    let stepper = new KTStepper(element);
    stepper.on("kt.stepper.click", function (stepper) {
        stepper.goTo(stepper.getClickedStepIndex()); // go to clicked step
    });
    stepper.on("kt.stepper.next", function (stepper) {
        stepper.goNext(); // go next step
    });
    stepper.on("kt.stepper.previous", function (stepper) {
        stepper.goPrevious(); // go previous step
    });
});

const cargarDatos = (id) => {
    const ruta = route(rutaEditar, { "contacto": id });
    generalidades.mostrarCargando('body');
    generalidades.ejecutar('GET', ruta, 'body', modalEditar, seccionEditar, function(){
        iniciarComponentes(formEditarContacto);
    });
}

const enviarDatos = (form) => {
    let formData = new FormData(document.getElementById("formEditarContacto"));
    let inputTelefono = generalidades.darTelefonoInput(`${formEditarContacto} #telEdit`);
	let tel = inputTelefono?.getNumber(intlTelInputUtils.numberFormat.NATIONAL);
    tel = tel.replace(/\((\w+)\)/g, "$1");
    tel = tel.replace(/-/g, "");
    tel = tel.replace(/\s/g, "");
	let codigo = inputTelefono?.getSelectedCountryData()?.dialCode ?? '';
	let pais_tel = inputTelefono?.getSelectedCountryData()?.iso2 ?? '';
    formData.set('telefono', codigo+tel);
    
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
            generalidades.ocultarValidaciones(formEditarContacto);
            window.listadoContactos();
        }
        generalidades.ocultarCargando(formEditarContacto);
        generalidades.toastrGenerico(response?.estado, response?.mensaje);
    }

    const error = (response) => {
        generalidades.ocultarCargando(formEditarContacto);
        generalidades.toastrGenerico(response?.estado, response?.mensaje);
        generalidades.mostrarValidaciones(formEditarContacto, response.validaciones);
    }
    const rutaActualizar = route("whatsapp.contactos.update", { "contacto": formData.get("id") });
    generalidades.edit(rutaActualizar, config, success, error);
    generalidades.mostrarCargando(formEditarContacto);
}