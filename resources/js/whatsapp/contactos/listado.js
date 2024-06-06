"use strict";

const tablaContactos = "#tablaContactos";
const rutaCargarListadoContactos = route("whatsapp.contactos.listado");

$(function () {
    listadoContactos();
});

/**
 * Función que permite cargar el listado.
 */
window.listadoContactos = () => {
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
            "url": rutaCargarListadoContactos,
            "type": "GET",                  
            
            "headers": {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')
            },
            data: function (data) {
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
                render: function (data, type, full, meta) {
                    return meta.row + 1;
                }
            },
            {
                data: 'nombre_completo',
                name: 'nombre_completo'
            },
            {
                data: 'identificacion',
                name: 'identificacion',
            },
            {
                data: 'email',
                name: 'email'
            },
            {
                data: 'telefono',
                name: 'telefono'
            },
            {
                data: 'estado',
                name: 'estado',
            },
            {
                data: 'tipo_identificacion',
                name: 'tipo_identificacion',
                render: function (data, type, full, meta) {
                    let nombreIdentificacion = {
                        1: 'CC - Cedula de Ciudadania',
                        2: 'NIT',
                        3: 'TI -Tarjeta de Identificación',
                    };

                    return nombreIdentificacion[full?.tipo_identificacion];
                }
            },
            {
                data: 'created_at',
                name: 'created_at',
            },
            {
                data: 'action',
                name: 'action',
                orderable: false,
                searchable: false
            },
        ],
        order: [
            [0, "asc"]
        ], 
        lengthMenu: [
            [15, 20, 50, 100, -1],
            [15, 20, 50, 100, "Todos"]
        ],
        pageLength: 15,
        dom: `<'row d-flex align-items-center justify-content-end'
                <'d-flex align-items-center justify-content-end'B>><'row d-flex align-items-center justify-content-between'<'col-sm-6 col-lg-6 col-md-6'l><'col-sm-6 col-lg-6 col-md-6'f>>
            <'table-responsive'tr>
            <'row'<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i><'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>>`,
        drawCallback: function(settings) {
            KTMenu.createInstances();
        }
    });
}