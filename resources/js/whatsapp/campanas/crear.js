"use strict";

const formCrearCampana = '#formCrearCampana';
const modalCrearCampana = '#modalCrearCampana';
const tablaContactos = '#tablaContactos';
var contenidoCampanaOriginal = '';
window.contactosSeleccionados = [];
var datos = {1: 'Nombre'};

$(function () {
    generalidades.validarFormulario(formCrearCampana, enviarDatos);
    // iniciarComponentes();
});

$(document).on('shown.bs.modal', '#modalCrearCampana', function () {
    $("#fechaProgramacion").flatpickr({
        minDate: "today",
        appendTo: document.body
    });
    $("#horaProgramacion").flatpickr({
        enableTime: true,
        noCalendar: true,
        dateFormat: "H:i",
        appendTo: document.body
    });
});

$(document).on('change', '#selectPlantilla', function(){
    let valor = 0;
    if (this.value) {
        valor = this.value;
    }

    $.ajax({
        type: 'GET',
        url: route('whatsapp.campanas.validarCampos', { id_plantilla: valor}),
        success: function(response) {
            if (response.header != null && response.header != 'TEXT') {
                $('#divInputFile').removeClass('d-none');
                $('#inputFile').attr('required', true);
                if (response.header == 'IMAGE') {
                    $('#inputFile').attr('accept', 'image/png');
                } 
                if (response.header == 'VIDEO') {
                    $('#inputFile').attr('accept', '.mp4');
                }
                if (response.header == 'DOCUMENT') {
                    $('#inputFile').attr('accept', '.pdf');
                }
            } else {
                $('#divInputFile').addClass('d-none');
                $('#inputFile').attr('required', false);
            }

            if (response.body) {
                let variables = '';
                for (let index = 0; index < response.body; index++) {
                   variables = variables + `<div class="mb-3 inputVariable">
                        <input type="text" name="variables[]" data-numero="${index+1}" placeholder="Ingrese valor de variable {{${index+1}}}" class="form-control variablesCampana" ${index==0 ? 'readonly' : ''} value='${index==0 ? 'Nombre' : ''}'>
                    </div>`;
                }
                $('#divVariables').html(variables);
            } else {
                $('.inputVariable').remove();
            }

            if (response.contenido) {
                contenidoCampanaOriginal = response.contenido;
                remplazarDatos(contenidoCampanaOriginal, datos);
                $('.contenidocampana').text(response.contenido);
                if (response.header && response.header == 'IMAGE') {
                    $('.imagenCampana').removeClass('d-none');
                }
                if (response.header && response.header == 'DOCUMENT') {
                    $('.imagenCampana').addClass('d-none');
                }
                if (response.header && response.header == 'VIDEO') {
                    $('.imagenCampana').addClass('d-none');
                }
            } else {
                $('.imagenCampana').addClass('d-none');
                $('.contenidocampana').text('Mensaje');
            }
        }
    });
});

$(document).on('change', '#selectEtiqueta', function(){
    window.contactosSeleccionados = [];
    listadoContactosEnviar();
    $('.checkSeleccionarTodos').prop("checked", false);
    if ($('#selectEtiqueta').val().length) {
        $('.seccionContactos').removeClass('d-none');
    } else {
        $('.seccionContactos').addClass('d-none');
    }
});

$(document).on('click', '#accioInmediatamente', function(){
    $('#fechas').addClass('d-none');
});

$(document).on('click', '#accionProgramar', function(){
    if (this.checked) {
        $('#fechas').removeClass('d-none');
    } else {
        $('#fechas').addClass('d-none');
    }
});

// Define una función que toma la cadena original y un objeto de datos para reemplazar
const remplazarDatos = (cadena, datos) => {
    // Utiliza una expresión regular para encontrar todas las coincidencias de {{algo}}
    return cadena.replace(/\{\{(\d+)\}\}/g, function(match, grupo1) {
        // El grupo1 contendrá el número entre las {{}}, que se usa como índice en el objeto de datos
        const indice = parseInt(grupo1, 10);

        // Verifica si el índice existe en los datos y reemplaza con el valor correspondiente
        if (datos.hasOwnProperty(indice)) {
        return datos[indice];
        }

        // Si el índice no existe en los datos, simplemente deja la cadena original sin cambios
        return match;
    });
}

$(document).on('input', '.variablesCampana', function(){
    if ($(this).val()) {
        let numero = $(this).attr('data-numero');
        datos[numero] = $(this).val();
        let cadenaNueva = remplazarDatos(contenidoCampanaOriginal, datos);
        $('.contenidocampana').text(cadenaNueva);
    } else {
        $('.contenidocampana').text(contenidoCampanaOriginal);
    }
});

$(document).on('change', '#inputFile', function() {
    var file = $(this).prop('files')[0];
    var reader = new FileReader();
    
    reader.onload = function(e) {
    $('.imgCampana').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(file);
});

const confirmarCreacion = () => {
    Swal.fire({
            icon: "info",
            text: '¿Está seguro de que desea crear y enviar la campaña?',
            showCancelButton: true,
            buttonsStyling: false,
            confirmButtonText: "Crear y enviar",
            cancelButtonText: "Cancelar",
            customClass: {
                confirmButton: "btn btn-primary",
                cancelButton: "btn btn-active-light"
            }
        }).then(function (result) {
            if (result.value) {
                $("#btnSubmit").trigger("click");
            }
        });
}

const marcarSeleccionados = () => {
    // activar el evento del click del check de seleccionar todos.
    $(document).on("change", ".checkSeleccionarTodos", function () {
        let seleccionado = this.checked;
        if (this.checked) {
            $(this).prop("checked", true);
        }
        $(".checkSeleccionado").each(function () {
            if (this.checked == seleccionado) {
                return;
            }

            this.checked = seleccionado;
            $(this).trigger('change');
        });
    });

    $(document).on("change", ".checkSeleccionado", function () {
        let idContacto = $(this).attr("data-registro");

        if (this.checked) {
            window.contactosSeleccionados.push(idContacto);
        } else {
            window.contactosSeleccionados = window.contactosSeleccionados.filter((contacto) => contacto != idContacto);
        }

        let cantidadChecks = $(`#tablaContactos .checkSeleccionado`).length;
        $(`#tablaContactos .checkSeleccionarTodos`).prop("checked", cantidadChecks === window.contactosSeleccionados.length);
    });
}

const enviarDatos = (form) => {
    Swal.fire({
        icon: "info",
        text: '¿Está seguro de que desea crear y enviar la campaña?',
        showCancelButton: true,
        buttonsStyling: false,
        confirmButtonText: "Crear y enviar",
        cancelButtonText: "Cancelar",
        customClass: {
            confirmButton: "btn btn-primary",
            cancelButton: "btn btn-active-light"
        }
    }).then(function (result) {
        if (result.value) {
            let formData = new FormData(document.getElementById("formCrearCampana"));
            formData.append('contactos', window.contactosSeleccionados);
            
            const config = {
                'method': 'POST',
                'headers': {
                    'Accept': generalidades.CONTENT_TYPE_JSON,
                },
                'body': formData
            }
        
            const success = (response) => {
                if (response.estado == 'success') {
                    generalidades.ocultarValidaciones(formCrearCampana);
                    $('.btnCerrarModal').trigger('click');
                    window.listadoCampana();
                    generalidades.resetValidate(formCrearCampana);
                }
                generalidades.ocultarCargando(formCrearCampana);
                generalidades.toastrGenerico(response?.estado, response?.mensaje);
            }
        
            const error = (response) => {
                generalidades.ocultarCargando(formCrearCampana);
                generalidades.toastrGenerico(response?.estado, response?.mensaje);
                generalidades.mostrarValidaciones(formCrearCampana, response.validaciones);
            }
            const ruta = route("whatsapp.campanas.store");
            generalidades.create(ruta, config, success, error);
            generalidades.mostrarCargando(formCrearCampana);
        }
    });
}

/**
 * Función que permite cargar el listado.
 */
const listadoContactosEnviar = () => {
    var table = $("#tablaContactos").DataTable({
        paging: true,
        responsive: true,
        serverSide: false,
        scrollX: true,
        searchDelay: 500,
        fixedHeader: {
            header:true
        },
        ajax: {
            "url": route('whatsapp.campanas.cargarMedicos'),
            "type": "GET",                  
            
            "headers": {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')
            },
            data: function (data) {
                data.etiquetas = $('#selectEtiqueta').val();
                generalidades.mostrarCargando(tablaContactos);
                data = Object.assign(data);
            },
            dataSrc: function (json) {
                generalidades.ocultarCargando(tablaContactos);
                return json.data
            },
        },
        buttons: [
            {
                extend: "excel",
                text: '<i class="fa fa-download"></i> Excel',
                className: "btn btn-light-success",
                title: "Listado Contactos.",
                exportOptions: {
                    columns: ":not(.excluir)"
                }
            },
            {
                text: '<i class="fa fa-sync-alt"></i> Actualizar',
                className: "btn btn-secondary",
                action: function (e, dt, node, config) {
                    dt.ajax.reload(null, false);
                }
            }
        ],
        columnDefs: [
            {
                targets: "all",
                className: "text-center"
            },
            {
                targets: "none",
                className: "text-justify"
            }
        ],
        columns: [
            {
                data: 'id',
                name: 'id',
            },
            {
                data: 'contacto.identificacion',
                name: 'contacto.identificacion',
            },
            {
                data: 'contacto.nombre_completo',
                name: 'contacto.nombre_completo',
            },
            {
                data: 'etiqueta.nombre',
                name: 'etiqueta.nombre',
            },
            {
                data: 'contacto.telefono',
                name: 'contacto.telefono',
            },
        ],
        order: [
            [0, "asc"]
        ], 
        lengthMenu: [
            [-1],
            ["Todos"]
        ],
        dom: `<'row d-flex align-items-center justify-content-end'
                <'d-flex align-items-center justify-content-end'B>><'row d-flex align-items-center justify-content-between'<'col-sm-6 col-lg-6 col-md-6'l><'col-sm-6 col-lg-6 col-md-6'f>>
            <'table-responsive'tr>
            <'row'<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i><'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>>`,
        drawCallback: function(settings) {
            marcarSeleccionados();
            $(".checkSeleccionado").each(function () {
                if (!this.checked) {
                    return;
                }

                $(this).trigger('change');
            });
        },
        initComplete: function () {
            marcarSeleccionados();
            $(".checkSeleccionado").each(function () {
                if (!this.checked) {
                    return;
                }

                $(this).trigger('change');
            });
        },
    });
}