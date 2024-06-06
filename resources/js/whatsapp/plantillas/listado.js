"use strict";

const tablaPlantilla = "#tablaPlantilla";
const rutaCargarListadoPlantillas = route("whatsapp.plantillas.listado");

$(function () {
    listadoPlantillas();
});

/**
 * Función que permite cargar el listado.
 */
window.listadoPlantillas = () => {
    if ($.fn.DataTable.isDataTable('#tablaPlantilla')) {
        $('#tablaPlantilla').DataTable().destroy();
    }

    var table = $("#tablaPlantilla").DataTable({
        paging: true,
        responsive: true,
        serverSide: false,
        scrollX: true,
        searchDelay: 500,
        fixedHeader: {
            header:true
        },
        ajax: {
            "url": rutaCargarListadoPlantillas,
            "type": "GET",                  
            "headers": {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')
            },
            data: function (data) {
                generalidades.mostrarCargando(tablaPlantilla);
                data = Object.assign(data);
            },
            dataSrc: function (json) {
                generalidades.ocultarCargando(tablaPlantilla);
                return json.data
            },
        },
        buttons: [
            {
                extend: "excel",
                text: '<i class="fa fa-download"></i> Excel',
                className: "btn btn-light-success",
                title: "Listado Medicos.",
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
                data: 'name',
                name: 'name'
            },
            {
                data: 'category',
                name: 'category',
            },
            {
                data: 'language',
                name: 'language'
            },
            {
                data: 'status',
                name: 'status'
            },
            // {
            //     data: 'cabecera',
            //     name: 'cabecera',
            //     render: function(data, type, full, meta) {
            //         // console.log(full);
            //         let info = '';
            //         if (full?.HEADER) {
            //             if (full?.HEADER?.format == 'IMAGE') { 
            //                 let ruta = '';
            //                 if (full?.example != 'N/A' && full?.example != '') {
            //                     ruta = full?.example;
            //                 }
            //                 info = `<img src="${ruta}" alt="" width="50%" height="35%" class="imgPlantilla">`;
            //             } else if (full?.HEADER?.format == 'VIDEO') {
            //                 info = `<iframe width="200" height="250" src="${full?.example}" frameborder="0" 
            //                     allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen autoplay="false"></iframe>`;
            //             } else if (full?.HEADER?.format == 'DOCUMENT') {
            //                 info = `<a href="${full?.example}" target="_blank">
            //                     <i class="fas fa-external-link-alt"> Ver documento</i>
            //                 </a>`;
            //             } else {
            //                 info = full?.example ? full?.example : 'N/A';
            //             }
            //         } else {
            //             info = 'N/A';
            //         }
            //         return info;
            //     }
            // },
            {
                data: 'texto',
                name: 'texto',
                render: function(data, type, full, meta) {
                    return full?.BODY?.text ?? 'N/A';
                }
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
        initComplete: function () {},
        drawCallback: function(settings) {
            KTMenu.createInstances();
        }
    });
}

$(document).on('click', '.btnVer', function(){
    let id = $(this).attr('data-plantilla');
    generalidades.mostrarCargando('body');
    generalidades.refrescarSeccion(null, route('whatsapp.plantillas.show', id), '#seccionVer', function(){
        $('#modalVerPlantilla').modal('show');
        generalidades.ocultarCargando('body');
    });
});