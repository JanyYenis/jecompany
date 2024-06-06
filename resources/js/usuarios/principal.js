"use strict";

const formRoles = '#formRoles';
const formPermisos = '#formPermisos';

$(function () {
    iniciarComponentes();
    generalidades.validarFormulario(formRoles, enviarDatosRoles);
    generalidades.validarFormulario(formPermisos, enviarDatosPermisos);
});

const iniciarComponentes = (form = "") => {
    let configMultiSelect = {
        elemento: '#selectRoles',
        selectableHeaderText: "Roles Disponibles",
        selectionHeaderText: "Roles Asignados",
        selectableHeaderPlaceholder: "Escribe el nombre del rol",
        selectionHeaderPlaceholder: "Escribe el nombre del rol"
    }
    generalidades.multiSelect(configMultiSelect);
    let configMultiSelect1 = {
        elemento: '#selectPermisos',
        selectableHeaderText: "Permisos Disponibles",
        selectionHeaderText: "Permisos Asignados",
        selectableHeaderPlaceholder: "Escribe el nombre del permiso",
        selectionHeaderPlaceholder: "Escribe el nombre del permiso"
    }
    generalidades.multiSelect(configMultiSelect1);
    // roles();
    // permisos();
}

$(document).on('click', '.btnRolesPermisos', function(){
    let id = $(this).attr('data-registro');
    roles(id);
    permisos(id);
    $('#idUsuario').val(id);
    $('#modalRolesPermisos').modal('show');
});

const roles = (id) => {
    const config = {
        "method": "POST",
        "body": {
            "usuario": id
        },
        "headers": {
            "Content-Type": generalidades.CONTENT_TYPE_JSON,
            "Accept": generalidades.CONTENT_TYPE_JSON
        }
    };

    const success = (response) => {
        if (response.estado === "success") {
            $("#selectRoles").multiSelect("deselect");
            $("#selectRoles option").remove();
            $("#selectRoles").multiSelect("refresh");
            let options = "";

            let seleccionados = [];
            // console.log(response);
            Object.entries(response.roles).forEach(([id, rol]) => {
                options = options + `<option value="${rol.id}" ${rol.seleccionado ? "selected" : ""}>${rol.text}</option>`;
                if (rol.seleccionado) {
                    seleccionados.push(rol.id);
                }
            });

            $("#selectRoles").append(options);
            $("#selectRoles").val(seleccionados);
            $("#selectRoles").multiSelect("refresh");
        }
        // generalidades.ocultarCargando("body");
    };
    const error = (response) => {
        generalidades.toastrGenerico(response.estado, response.mensaje);
        // generalidades.ocultarCargando("body");
    }

    // generalidades.mostrarCargando("body");
    generalidades.post(route('roles.buscarRol'), config, success, error);
};

const permisos = (id) => {
    const config = {
        "method": "POST",
        "body": {
            "usuario": id
        },
        "headers": {
            "Content-Type": generalidades.CONTENT_TYPE_JSON,
            "Accept": generalidades.CONTENT_TYPE_JSON
        }
    };

    const success = (response) => {
        if (response.estado === "success") {
            $("#selectPermisos").multiSelect("deselect");
            $("#selectPermisos option").remove();
            $("#selectPermisos").multiSelect("refresh");
            let options = "";

            let seleccionados = [];
            // console.log(response);
            Object.entries(response.permisos).forEach(([id, permiso]) => {
                options = options + `<option value="${permiso.id}" ${permiso.seleccionado ? "selected" : ""}>${permiso.text}</option>`;
                if (permiso.seleccionado) {
                    seleccionados.push(permiso.id);
                }
            });

            $("#selectPermisos").append(options);
            $("#selectPermisos").val(seleccionados);
            $("#selectPermisos").multiSelect("refresh");
        }
        // generalidades.ocultarCargando("body");
    };
    const error = (response) => {
        generalidades.toastrGenerico(response.estado, response.mensaje);
        // generalidades.ocultarCargando("body");
    }

    // generalidades.mostrarCargando("body");
    generalidades.post(route('roles.buscarPermisos'), config, success, error);
};

const enviarDatosRoles = (form = '') => {
    let formData = new FormData(document.querySelector(formRoles));
    formData.set('roles', $('#selectRoles').val());
    formData.set('id', $('#idUsuario').val());
    
    const config = {
        'method': 'POST',
        'headers': {
            'Accept': generalidades.CONTENT_TYPE_JSON,
        },
        'body': formData
    }

    const success = (response) => {
        if (response.estado == 'success') {
            generalidades.ocultarValidaciones(formRoles);
        }
        generalidades.ocultarCargando(formRoles);
        generalidades.toastrGenerico(response?.estado, response?.mensaje);
    }

    const error = (response) => {
        generalidades.ocultarCargando(formRoles);
        generalidades.toastrGenerico(response?.estado, response?.mensaje);
        generalidades.mostrarValidaciones(formRoles, response.validaciones);
    }
    const ruta = route("roles.asignarRol", {usuario: formData.get('id')});
    generalidades.create(ruta, config, success, error);
    generalidades.mostrarCargando(formRoles);
}

const enviarDatosPermisos = (form = '') => {
    let formData = new FormData(document.querySelector(formPermisos));
    formData.set('permisos', $('#selectPermisos').val());
    formData.set('id', $('#idUsuario').val());
    
    const config = {
        'method': 'POST',
        'headers': {
            'Accept': generalidades.CONTENT_TYPE_JSON,
        },
        'body': formData
    }

    const success = (response) => {
        if (response.estado == 'success') {
            generalidades.ocultarValidaciones(formPermisos);
        }
        generalidades.ocultarCargando(formPermisos);
        generalidades.toastrGenerico(response?.estado, response?.mensaje);
    }

    const error = (response) => {
        generalidades.ocultarCargando(formPermisos);
        generalidades.toastrGenerico(response?.estado, response?.mensaje);
        generalidades.mostrarValidaciones(formPermisos, response.validaciones);
    }
    const ruta = route("roles.asignarPermiso", {usuario: formData.get('id')});
    generalidades.create(ruta, config, success, error);
    generalidades.mostrarCargando(formPermisos);
}

require('./listado');
// require('./editar');