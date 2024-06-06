"use strict";

const tablaDetalleCampanas = "#tablaDetalleCampanas";
const rutaCargarListadoDetalleCampana = "farma-d.campanas.listado-detalle";

$(function () {
    listadoDetalleCampana(window.idCampana);
});

/**
 * Función que permite cargar el listado.
 */
window.listadoDetalleCampana = (id) => {
    var table = $("#tablaDetalleCampanas").DataTable({
        paging: true,
        responsive: true,
        serverSide: false,
        scrollX: true,
        searchDelay: 500,
        fixedHeader: {
            header:true
        },
        ajax: {
            "url": route(rutaCargarListadoDetalleCampana, {campana: id}),
            "type": "GET",                  
            
            "headers": {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')
            },
            data: function (data) {
                generalidades.mostrarCargando(tablaDetalleCampanas);
                data = Object.assign(data);
            },
            dataSrc: function (json) {
                generalidades.ocultarCargando(tablaDetalleCampanas);
                return json.data
            },
        },
        buttons: [
            {
                extend: "excel",
                text: '<i class="fa fa-download"></i> Excel',
                className: "btn btn-light-success",
                title: "Listado Detalle Campaña.",
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
                data: 'representante.nombre_completo',
                name: 'representante.nombre_completo'
            },
            {
                data: 'nombre_completo',
                name: 'nombre_completo',
            },
            {
                data: 'eventos.marca',
                name: 'eventos.marca'
            },
            {
                data: 'especialidad',
                name: 'especialidad'
            },
            {
                data: 'sub_linea.nombre',
                name: 'sub_linea.nombre'
            },
            {
                data: 'origen',
                name: 'origen'
            },
            {
                data: 'abierto',
                name: 'abierto',
                render: function (data, type, full, meta) {
                    let icono = '<i class="fas fa-check fs-1"></i>';
                    if (full.mensaje?.estado) {
                        if (full.mensaje?.estado == 'read') {
                            icono = '<i class="fas fa-check-double text-primary fs-1"></i>';
                        } else if (full.mensaje?.estado == 'sent') {
                            icono = '<i class="fas fa-check fs-1"></i>';
                        } else if (full.mensaje?.estado == 'delivered') {
                            icono = '<i class="fas fa-check-double fs-1"></i>';
                        } else {
                            icono = '<i class="fas fa-times text-danger fs-1"></i>';
                        }
                    }
                    return icono;
                }
            },
            {
                data: 'clic_contacto_wpp',
                name: 'clic_contacto_wpp',
                render: function (data, type, full, meta) {
                    return full.clic_contacto_wpp ? 'SI' : 'NO';
                }
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