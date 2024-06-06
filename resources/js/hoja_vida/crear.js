"use strict";

const formHojaVida1 = "#formHojaVida1";
const formHojaVida2 = "#formHojaVida2";
const formHojaVida3 = "#formHojaVida3";
const formHojaVida4 = "#formHojaVida4";
const formHojaVida5 = "#formHojaVida5";
const formHojaVida6 = "#formHojaVida6";

$(function () {
    iniciarComponentesCrear();
    generalidades.validarFormulario(formHojaVida1, form1);
    generalidades.validarFormulario(formHojaVida2, form2);
    generalidades.validarFormulario(formHojaVida3, form3);
    generalidades.validarFormulario(formHojaVida4, form4);
    generalidades.validarFormulario(formHojaVida5, form5);
    generalidades.validarFormulario(formHojaVida6, form6);
});

const iniciarComponentesCrear = (form = '') => {
    var editors = $(".kt_docs_quill_autosave");

    // Itera a través de cada elemento con la clase "editor"
    editors.each(function() {
        var editor = $(this);
        var quill = new Quill(editor[0], {
            modules: {
                toolbar: [
                    [{
                        header: [1, 2, false]
                    }],
                    ['bold', 'italic', 'underline'],
                    ['image', 'code-block']
                ]
            },
            placeholder: 'Escribe aqui...',
            theme: 'snow' // or 'bubble'
        });
    });

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

    generalidades.initTelefonoInput(`${form} #tel`);

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

const form1 = () => {
    enviarDatos(formHojaVida1);
}

const form2 = () => {
    enviarDatos(formHojaVida2);
}

const form3 = () => {
    enviarDatos(formHojaVida3);
}

const form4 = () => {
    enviarDatos(formHojaVida4);
}

const form5 = () => {
    enviarDatos(formHojaVida5);
}

const form6 = () => {
    enviarDatos(formHojaVida6);
}

const enviarDatos = (form) => {
    let formData = new FormData(document.querySelector(form));
    var formulario = $(form);
    var editor = formulario.find(".kt_docs_quill_autosave");
    let campo = editor.attr('name');
    var contenido = editor[0].children[0].innerHTML; // Puede variar según la estructura de Quill
    formData.set('id_usuario', $('#idUsuario').val());
    formData.set('id', $('#idHoja').val() ?? null);
    formData.set(campo, contenido);
    
    const config = {
        'method': 'POST',
        'headers': {
            'Accept': generalidades.CONTENT_TYPE_JSON,
        },
        'body': formData
    }

    const success = (response) => {
        if (response.estado == 'success') {
            generalidades.ocultarValidaciones(form);
            if ($('.btnTerminar').is(":visible")) {
                location.href = route('hoja-de-vida.index');
            } else {
                $('.btnNext').trigger('click');
            }
        }
        generalidades.ocultarCargando(form);
        generalidades.toastrGenerico(response?.estado, response?.mensaje);
    }

    const error = (response) => {
        generalidades.ocultarCargando(form);
        generalidades.toastrGenerico(response?.estado, response?.mensaje);
        generalidades.mostrarValidaciones(form, response.validaciones);
    }
    const ruta = route("hoja-de-vida.store");
    if (formData.get('id')) {
        ruta = route("hoja-de-vida.update", {'hojaVida': formData.get('id')});
    }
    generalidades.create(ruta, config, success, error);
    generalidades.mostrarCargando(form);
}