"use strict";

const formCrearContacto = '#formCrearContacto';

$(function () {
    iniciarComponentes();
    generalidades.validarFormulario(formCrearContacto, enviarDatos);
    // iniciarCarga();
});

const iniciarComponentes = (form = "") => {
    let input = document.querySelector("#tel");
    window.intlTelInput(input, {
        utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/js/utils.js",
        initialCountry: 'CO',
        preferredCountries: ["CO", "US"],
    });

    // Email address
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
    }).mask("#inputEmail");
}

$(document).on('shown.bs.modal', '#modalCrearContacto', function () {
    let element = document.querySelector("#kt_stepper_example_clickable");
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

const enviarDatos = (form) => {
    let formData = new FormData(document.getElementById("formCrearContacto"));
    let inputTelefono = generalidades.darTelefonoInput(`${formCrearContacto} #tel`);
	let tel = inputTelefono?.getNumber(intlTelInputUtils.numberFormat.NATIONAL);
    tel = tel.replace(/\((\w+)\)/g, "$1");
    tel = tel.replace(/-/g, "");
    tel = tel.replace(/\s/g, "");
	let codigo = inputTelefono?.getSelectedCountryData()?.dialCode ?? '';
	let pais_tel = inputTelefono?.getSelectedCountryData()?.iso2 ?? '';
    formData.set('telefono', codigo+tel);
    
    const config = {
        'method': 'POST',
        'headers': {
            'Accept': generalidades.CONTENT_TYPE_JSON,
        },
        'body': formData
    }

    const success = (response) => {
        if (response.estado == 'success') {
            generalidades.ocultarValidaciones(formCrearContacto);
            generalidades.resetValidate(formCrearContacto);
            $('.btnCerrarModal').trigger('click');
            window.listadoContactos();
        }
        generalidades.ocultarCargando(formCrearContacto);
        generalidades.toastrGenerico(response?.estado, response?.mensaje);
    }

    const error = (response) => {
        generalidades.ocultarCargando(formCrearContacto);
        generalidades.toastrGenerico(response?.estado, response?.mensaje);
        generalidades.mostrarValidaciones(formCrearContacto, response.validaciones);
    }
    const ruta = route("whatsapp.contactos.store");
    generalidades.create(ruta, config, success, error);
    generalidades.mostrarCargando(formCrearContacto);
}

const iniciarCarga  = () => {
    var myDropzone = new Dropzone("#kt_dropzonejs_example_1", {
        acceptedFiles: ".xls, .xlsx, .csv",
        url: route('whatsapp.contactos.cargarMedicos'),
        paramName: "archivo", // The name that will be used to transfer the file
        uploadMultiple: true,
        maxFiles: 1,
        maxFilesize: 100, // MB
        autoProcessQueue: false, // Deshabilita el procesamiento automático de archivos
        parallelUploads: 1, // Cantidad máxima de archivos cargados simultáneamente
        addRemoveLinks: true,
        accept: function(file, done) {
            if (file.name == "wow.jpg") {
                done("Naha, you don't.");
            } else {
                done();
            }
        },
        init: function() {
            // Evento sending - se ejecuta antes de que se envíe un archivo
            this.on("sending", function(file, xhr, formData) {
                // Agrega el token CSRF al formulario de datos
                formData.append("_token", document.head.querySelector('meta[name="csrf-token"]').content);
            });
        }
    });

    $(document).on('click', '#enviarButton', function () {
        myDropzone.processQueue(); // Inicia el proceso de carga de los archivos en la cola de Dropzone
    });

    myDropzone.on("success", function(file, response) {
        if (response.estado == 'success') {
            generalidades.toastrGenerico(response?.estado, response?.mensaje);
            $('.btnCerrarModal').trigger('click');
            window.listadoContactos();
        } else {
            $('.btnCerrarModal').trigger('click');
            window.listadoContactos();
            let accion = '';
            if (response.ruta) {
                accion = `<div class="">
                            <label>Se a generado el siente archivo con los registros que presentaron error</label>&nbsp;
                            <a href="${response?.ruta ?? '#'}" class="btn btn-success hover-scale">
                                <i class="fas fa-file-excel"></i>
                                Excel
                            </a>
                        </div>`;
            }
            let html = `<div class="text-start">
                            <label>Se encontraron:</label><br><br>
                            <ul>
                                <li>${response?.vacios ?? 0} filas con campos vacios</li>
                                <li>${response?.especilidades ?? 0} especialidades incorrectas</li>
                                <li>${response?.subLineas ?? 0} sub lineas incorrectas</li>
                            </ul>
                            ${accion}
                        </div>`;
            Swal.fire({
                icon: response.estado,
                title: response.titulo,
                html: html,
            });
        }
        myDropzone.removeAllFiles();
    });

    myDropzone.on("error", function(file, errorMessage) {
        toastr.error("A ocurrido un error al intentar cargar el archivos", "¡Error!");
        myDropzone.removeAllFiles();
    });
}