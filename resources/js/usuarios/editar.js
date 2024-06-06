"use strict";

const formEditarUsuario = "#formEditarUsuario";

$(function () {
    iniciarComponentes();
    generalidades.validarFormulario(formEditarUsuario, enviarDatos);
});

const iniciarComponentes = (form = "") => {
    const input = document.querySelector("#tel");
    window.intlTelInput(input, {
        utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/js/utils.js",
        initialCountry: "CO",
    });

    generalidades.initTelefonoInput(`${form} #telefonoWhatsapp`);

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
    
    $("#kt_datepicker_1").flatpickr();

    $('#kt_docs_repeater_basic').repeater({
        initEmpty: false,

        defaultValues: {
            'text-input': 'foo'
        },

        show: function () {
            $(this).slideDown();
        },

        hide: function (deleteElement) {
            $(this).slideUp(deleteElement);
        }
    });

    // Format options
    var optionFormat = function(item) {
        if ( !item.id ) {
            return item.text;
        }

        var span = document.createElement('span');
        var imgUrl = item.element.getAttribute('data-kt-select2-country');
        var template = '';

        template += '<img src="' + imgUrl + '" class="rounded-circle h-40px w-40px me-4" alt="image"/>';
        template += item.text;

        span.innerHTML = template;

        return $(span);
    }

    // Init Select2 --- more info: https://select2.org/
    $('#selectPais').select2({
        templateSelection: optionFormat,
        templateResult: optionFormat
    });

    $(document).on('change', '#selectPais', function(){
        if (this.value) {
            $.ajax({
                type: 'GET',
                url: route('ciudades.buscar', {'pais': this.value}),
                success: function(response) {
                    if (response.estado == 'success') {
                        let ciudades = response?.ciudades ?? [];
                        let selectCiudad = $(`#selectCiudad`);
                        selectCiudad.empty();
                        let opcion = new Option('', '', false, false);
                        selectCiudad.append(opcion);
                        ciudades.forEach((ciudad) => {
                            let selected = false;
                            if (selectCiudad.attr('data-ciudad') && selectCiudad.attr('data-ciudad') == ciudad.id) {
                                selected = true;
                            }
                            selectCiudad.append(new Option(ciudad.text, ciudad.id, selected, selected));
                        });
                        $('#selectCiudad').attr('disabled', false);
                    }
                    generalidades.toastrGenerico(response?.estado, response?.mensaje);
                    // $('.divOpciones').removeClass('d-none');
                }
            });
        } else {
            $('#selectCiudad').attr('disabled', true);
        }
    });

    $('#selectPais').trigger('change');
}

const enviarDatos = (form) => {
    let formData = new FormData(document.getElementById("formEditarUsuario"));
    let inputTelefono = generalidades.darTelefonoInput(`${formEditarUsuario} #tel`);
	let tel = inputTelefono?.getNumber(intlTelInputUtils.numberFormat.NATIONAL);
    tel = tel.replace(/\((\w+)\)/g, "$1");
    tel = tel.replace(/-/g, "");
    tel = tel.replace(/\s/g, "");
	let codigo = inputTelefono?.getSelectedCountryData()?.dialCode ?? '';
	let pais_tel = inputTelefono?.getSelectedCountryData()?.iso2 ?? '';
    formData.set('telefono', tel);
    formData.set('codigo_tel', codigo);
    formData.set('pais_tel', pais_tel);
    let imageInput = document.getElementById('avatarUsuario');
    let imageFile = imageInput.files[0];
    formData.set('image', imageFile);
    
    const config = {
        'method': 'PUT',
        'headers': {
            'Accept': generalidades.CONTENT_TYPE_JSON,
        },
        'body': formData
    }

    const success = (response) => {
        if (formData.get('avatar')) {
            $.ajax({
                type: 'POST',
                url: route('usuarios.guardarImagen'),
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                },
                data: formData,
                processData: false, // Evita que jQuery procese los datos
                contentType: false, // Evita que jQuery establezca el encabezado 'Content-Type'
                success: function(response) {
                    if (response.estado == 'success') {
                        generalidades.ocultarValidaciones(formEditarUsuario);
                    }
                    generalidades.ocultarCargando(formEditarUsuario);
                    generalidades.toastrGenerico(response?.estado, response?.mensaje);
                    location.reload();
                },
                error: function(response) {
                    generalidades.ocultarCargando(formEditarUsuario);
                    generalidades.toastrGenerico(response?.estado, response?.mensaje);
                    generalidades.mostrarValidaciones(formEditarUsuario, response.validaciones);
                }
            });
        } else {
            if (response.estado == 'success') {
                generalidades.ocultarValidaciones(formEditarUsuario);
            }
            generalidades.ocultarCargando(formEditarUsuario);
            generalidades.toastrGenerico(response?.estado, response?.mensaje);
            location.reload();
        }
    }

    const error = (response) => {
        generalidades.ocultarCargando(formEditarUsuario);
        generalidades.toastrGenerico(response?.estado, response?.mensaje);
        generalidades.mostrarValidaciones(formEditarUsuario, response.validaciones);
    }
    const rutaActualizar = route("usuarios.update", { "usuario": formData.get("id") });
    generalidades.edit(rutaActualizar, config, success, error);
    generalidades.mostrarCargando(formEditarUsuario);
}

$(document).on('click', '.btnCancelarDosFactores', function(){
    Swal.fire({
        text: '¿Está seguro que desea inhabilitar la autenticación de dos factores?',
        icon: "info",
        showCancelButton: true,
        buttonsStyling: false,
        confirmButtonText: "Si",
        cancelButtonText: "No",
        customClass: {
            confirmButton: "btn btn-primary",
            cancelButton: "btn btn-active-light"
        }
    }).then((function(result) {
        if (result.value) {
            cancelar();
        }
    }))
});

const cancelar = () => {
    let formData = new FormData();
    formData.append('google2fa_secret', null);
    
    const config = {
        'method': 'PUT',
        'headers': {
            'Accept': generalidades.CONTENT_TYPE_JSON,
        },
        'body': formData
    }

    const success = (response) => {
        if (response.estado == 'success') {
        }
        generalidades.ocultarCargando('body');
        generalidades.toastrGenerico(response?.estado, response?.mensaje);
        location.reload();
    }

    const error = (response) => {
        generalidades.ocultarCargando('body');
        generalidades.toastrGenerico(response?.estado, response?.mensaje);
    }

    const rutaActualizar = route("usuarios.update", { "usuario": window.user });
    generalidades.edit(rutaActualizar, config, success, error);
    generalidades.mostrarCargando('body');
}