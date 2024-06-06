"use strict";

var wrapperElement;
var formElement;
var mainElement;
var resultsElement;
var emptyElement;
var preferencesElement;
var preferencesShowElement;
var preferencesDismissElement;
var advancedOptionsFormElement;
var advancedOptionsFormShowElement;
var advancedOptionsFormCancelElement;
var advancedOptionsFormSearchElement;

$(function () {
    // Elements
    var element = document.querySelector("#kt_header_search");

    if (!element) {
        return;
    }

    wrapperElement = element.querySelector("[data-kt-search-element='wrapper']");
    formElement = element.querySelector("[data-kt-search-element='form']");
    mainElement = element.querySelector("[data-kt-search-element='main']");
    resultsElement = element.querySelector("[data-kt-search-element='results']");
    emptyElement = element.querySelector("[data-kt-search-element='empty']");

    preferencesElement = element.querySelector("[data-kt-search-element='preferences']");
    preferencesShowElement = element.querySelector("[data-kt-search-element='preferences-show']");
    preferencesDismissElement = element.querySelector("[data-kt-search-element='preferences-dismiss']");

    advancedOptionsFormElement = element.querySelector("[data-kt-search-element='advanced-options-form']");
    advancedOptionsFormShowElement = element.querySelector("[data-kt-search-element='advanced-options-form-show']");
    advancedOptionsFormCancelElement = element.querySelector("[data-kt-search-element='advanced-options-form-cancel']");
    advancedOptionsFormSearchElement = element.querySelector("[data-kt-search-element='advanced-options-form-search']");

    // Initialize search handler
    var searchObject = new KTSearch(element);
    
    // Search handler
    searchObject.on('kt.search.process', processs);

    // Clear handler
    searchObject.on('kt.search.clear', clear);

    // Custom handlers
    handlePreferences();
    handleAdvancedOptionsForm();
});

const processs = (search) => {
    let titulo = $('#tituloSearch').is(':checked');
    let descripcion = $('#descripcionSearch').is(':checked');
    let etiqueta = $('#etiquetaSearch').is(':checked');
    let responsable = $('#responsableSearch').is(':checked');
    let buscar = $('#inputSearchGeneral').val();

    if (!buscar) {
        window.consultarTareas();
    }

    mainElement.classList.add("d-none");
    const config = {
        'method': 'GET',
        'headers': {
            'Accept': generalidades.CONTENT_TYPE_JSON,
        },
    }

    const success = (response) => {
        if (response.estado == 'success') {
            $('.seccionResultadoSearch').html(response.html);
            resultsElement.classList.remove("d-none");
            emptyElement.classList.add("d-none");
        }
        generalidades.ocultarCargando('body');
        generalidades.toastrGenerico(response?.estado, response?.mensaje);
        // Complete search
        search.complete();
    }

    const error = (response) => {
        generalidades.ocultarCargando('body');
        generalidades.toastrGenerico(response?.estado, response?.mensaje);
        resultsElement.classList.add("d-none");
        emptyElement.classList.remove("d-none");
        search.complete();
    }

    generalidades.mostrarCargando('body');
    generalidades.get(route('tareas.filtrar', { search: buscar, titulo: titulo, descripcion: descripcion, etiqueta: etiqueta, responsable: responsable }), config, success, error);
}

const clear = (search) => {
    // Show recently viewed
    mainElement.classList.remove("d-none");
    // Hide results
    resultsElement.classList.add("d-none");
    // Hide empty message
    emptyElement.classList.add("d-none");
}

const handlePreferences = () => {
    // Preference show handler
    preferencesShowElement.addEventListener("click", function () {
        wrapperElement.classList.add("d-none");
        preferencesElement.classList.remove("d-none");
    });

    // Preference dismiss handler
    preferencesDismissElement.addEventListener("click", function () {
        wrapperElement.classList.remove("d-none");
        preferencesElement.classList.add("d-none");
    });
}

const handleAdvancedOptionsForm = () => {
    // Show
    advancedOptionsFormShowElement.addEventListener("click", function () {
        wrapperElement.classList.add("d-none");
        advancedOptionsFormElement.classList.remove("d-none");
    });

    // Cancel
    advancedOptionsFormCancelElement.addEventListener("click", function () {
        wrapperElement.classList.remove("d-none");
        advancedOptionsFormElement.classList.add("d-none");
    });

    // Search
    advancedOptionsFormSearchElement.addEventListener("click", function () {

    });
}