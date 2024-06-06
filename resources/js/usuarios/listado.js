"use strict";

const tablaUsuarios = "#tablaUsuarios";
const rutaCargarListadoUsuarios = route("usuarios.listado");

$(function () {
    listadoUsuarios();
});

/**
 * Función que permite cargar el listado.
 */
const listadoUsuarios = () => {
    var table = $("#tablaUsuarios").DataTable({
        paging: true,
        responsive: true,
        processing: false,
        serverSide: false,
        autowidth: false,
        stateSave: true,
        scrollX: true,
        searchDelay: 500,
        fixedHeader: {
            header:true
        },
        ajax: {
            "url": rutaCargarListadoUsuarios,
            "type": "GET",                  
            
            "headers": {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')
            },
            data: function (data) {
                generalidades.mostrarCargando(tablaUsuarios);
                data = Object.assign(data);
            },
            dataSrc: function (json) {
                generalidades.ocultarCargando(tablaUsuarios);
                return json.data
            },
        },
        buttons: [
            {
                extend: "pdf",
                text: '<i class="fa fa-download"></i> PDF',
                className: "btn btn-light-danger",
                title: "Listado Usuarios.",
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
                data: 'nombreCompleto',
                name: 'nombreCompleto'
            },
            {
                data: 'identificacion',
                name: 'identificacion',
                render: function (data, type, full, meta) {
                    return full.identificacion ?? 'N/A';
                }
            },
            {
                data: 'tipo_documento',
                name: 'tipo_documento'
            },
            {
                data: 'genero',
                name: 'genero'
            },
            {
                data: 'fecha',
                name: 'fecha'
            },
            {
                data: 'telefono',
                name: 'telefono'
            },
            // {
            //     data: 'direccion',
            //     name: 'direccion'
            // },
            {
                data: 'id_ciudad',
                name: 'id_ciudad'
            },
            {
                data: 'estado',
                name: 'estado'
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
        dom: `<'row'<'col-sm-6 col-lg-6 col-md-6 d-flex align-items-center justify-content-start'f><'col-sm-6 col-lg-6 col-md-6'<'row'<'col-sm-6 col-lg-6 col-md-6 d-flex justify-content-end'l><'col-sm-6 col-lg-6 col-md-6 d-flex justify-content-end'B>>>>
            <'table-responsive'tr>
            <'row'<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i><'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>>`,
        drawCallback: function(settings) {
            KTMenu.createInstances();
        }
    });
}