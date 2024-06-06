"use strict";

$(function () {
});

$(document).on('click', '#btnTutorial', function(){
    iniciarTutorial();
});

const iniciarTutorial = () => {
    let driverObj = driver({
        popoverClass: 'driverjs-theme',
        nextBtnText: 'Siguiente',
        prevBtnText: 'Atras',
        doneBtnText: 'Salir',
        showProgress: false,
        steps: [
            { 
                popover: { 
                    description: `<div class="d-flex justify-content-center align-items-center">
                        <div class="me-4">
                            <img src='../../../img/logo.png' style='height: 5rem; width: 7rem;'/>
                        </div>
                        <div class="text-start">
                            <header id="driver-popover-title" class="driver-popover-title" style="display: block;">
                                Bienvenido a tus Plantillas
                            </header>
                            <span style='font-size: 15px; display: block; margin-top: 10px;'>
                                Aquí encontrarás todas las plantillas que se encuentran en Whats King, estas pasan por la aprobación META para prevenir que tus campañas sean bloqueadas.
                            </span>
                        </div>
                    </div>`,
                    side: "left", 
                    align: 'start' 
                }
            },
            { 
                element: '#tutorialCrearPlantilla',
                popover: {
                    description: `<div class="d-flex justify-content-center align-items-center">
                        <div class="me-4">
                            <img src='../../img/logo.png' style='height: 5rem; width: 7rem;'/>
                        </div>
                        <div class="text-start">
                            <header id="driver-popover-title" class="driver-popover-title" style="display: block;">
                                Crear Plantilla
                            </header>
                            <span style='font-size: 15px; display: block; margin-top: 10px;'>
                                Para crear una nueva plantilla, puedes darle clic al botón CREAR PLANTILLA. Este desplegará un modal con los campos necesarios para crear una nueva plantilla.
                            </span>
                        </div>
                    </div>`,
                    side: "left", 
                    align: 'start' 
                }
            },
            { 
                element: '#tutorialTablaPlantilla',
                popover: {
                    description: `<div class="d-flex justify-content-center align-items-center">
                        <div class="me-4">
                            <img src='../../img/logo.png' style='height: 5rem; width: 7rem;'/>
                        </div>
                        <div class="text-start">
                            <header id="driver-popover-title" class="driver-popover-title" style="display: block;">
                                Listado de plantillas
                            </header>
                            <span style='font-size: 15px; display: block; margin-top: 10px;'>
                                En este listado podrás encontrar el listado de plantillas que se en cuentran en Whats King.
                            </span>
                        </div>
                    </div>`,
                    side: "left", 
                    align: 'start' 
                }
            },
            {
                popover: {
                    description: `<div class="d-flex justify-content-center align-items-center">
                        <div class="me-4">
                            <img src='../../img/logo.png' style='height: 5rem; width: 7rem;'/>
                        </div>
                        <div class="text-start">
                            <header id="driver-popover-title" class="driver-popover-title" style="display: block;">
                                Whats King
                            </header>
                            <span style='font-size: 15px; display: block; margin-top: 10px;'>
                                Con Whats King crecimiento y campañas al máximo nivel.
                            </span>
                        </div>
                    </div>`,
                }
            }
        ]
    });

    driverObj.drive();
}

$(document).on('click', '#btnTutorialCrear', function(){
    iniciarTutorialCrear();
});

const iniciarTutorialCrear = () => {
    let driverObj = driver({
        popoverClass: 'driverjs-theme',
        nextBtnText: 'Siguiente',
        prevBtnText: 'Atras',
        doneBtnText: 'Salir',
        showProgress: false,
        steps: [
            { 
                element: '#nombrePlantilla',
                popover: { 
                    description: `<div class="d-flex justify-content-center align-items-center">
                        <div class="me-4">
                            <img src='../../../img/logo.png' style='height: 5rem; width: 7rem;'/>
                        </div>
                        <div class="text-start">
                            <header id="driver-popover-title" class="driver-popover-title" style="display: block;">
                                Nombre de la Plantilla
                            </header>
                            <span style='font-size: 15px; display: block; margin-top: 10px;'>
                                Agregué un nombre a la plantilla. El nombre será todo en minúsculas y separado por guiones bajos.
                            </span>
                        </div>
                    </div>`,
                    side: "left", 
                    align: 'start' 
                }
            },
            { 
                element: '#tutorialEncabezado',
                popover: {
                    description: `<div class="d-flex justify-content-center align-items-center">
                        <div class="me-4">
                            <img src='../../img/logo.png' style='height: 5rem; width: 7rem;'/>
                        </div>
                        <div class="text-start">
                            <header id="driver-popover-title" class="driver-popover-title" style="display: block;">
                                Encabezado de la Plantilla
                            </header>
                            <span style='font-size: 15px; display: block; margin-top: 10px;'>
                                Podrá seleccionar un encabezado de tipo texto o de multimedia. Si selecciona texto, se mostrará un campo para agregar el texto. Si es multimedia, deberá seleccionar entre tres opciones: IMAGEN, VIDEO o DOCUMENTO.
                            </span>
                        </div>
                    </div>`,
                    side: "left", 
                    align: 'start' 
                }
            },
            { 
                element: '#contenidoCampana',
                popover: {
                    description: `<div class="d-flex justify-content-center align-items-center">
                        <div class="me-4">
                            <img src='../../img/logo.png' style='height: 5rem; width: 7rem;'/>
                        </div>
                        <div class="text-start">
                            <header id="driver-popover-title" class="driver-popover-title" style="display: block;">
                                Contenido de la plantilla
                            </header>
                            <span style='font-size: 15px; display: block; margin-top: 10px;'>
                                Para crear plantillas para reutilizar o donde se envien el nombre del medico debe agregarse las variables. Para agregar una varibale debe escribir {{1}}, y si desea agregar otra debe escribir {{2}} y asi segun la cantidad de variables que necesite.
                            </span>
                        </div>
                    </div>`,
                    side: "left", 
                    align: 'start' 
                }
            },
            {
                popover: {
                    description: `<div class="d-flex justify-content-center align-items-center">
                        <div class="me-4">
                            <img src='../../img/logo.png' style='height: 5rem; width: 7rem;'/>
                        </div>
                        <div class="text-start">
                            <header id="driver-popover-title" class="driver-popover-title" style="display: block;">
                                Importante
                            </header>
                            <span style='font-size: 15px; display: block; margin-top: 10px;'>
                                Al momento de agregar variables, se muestran campos para agregar ejemplos de lo que podrían contener. Al hacer esto, META podrá validar la plantilla de una mejor manera.
                            </span>
                        </div>
                    </div>`,
                }
            },
            { 
                element: '#tutorialBoton',
                popover: {
                    description: `<div class="d-flex justify-content-center align-items-center">
                        <div class="me-4">
                            <img src='../../img/logo.png' style='height: 5rem; width: 7rem;'/>
                        </div>
                        <div class="text-start">
                            <header id="driver-popover-title" class="driver-popover-title" style="display: block;">
                                Botón de la plantilla
                            </header>
                            <span style='font-size: 15px; display: block; margin-top: 10px;'>
                                Podrá agregar un botón que redireccione a un sitio web o para contactar al representante.
                            </span>
                        </div>
                    </div>`,
                    side: "left", 
                    align: 'start' 
                }
            },
            { 
                element: '#smartphone_id',
                popover: {
                    description: `<div class="d-flex justify-content-center align-items-center">
                        <div class="me-4">
                            <img src='../../img/logo.png' style='height: 5rem; width: 7rem;'/>
                        </div>
                        <div class="text-start">
                            <header id="driver-popover-title" class="driver-popover-title" style="display: block;">
                                Previsualización de la plantilla.
                            </header>
                            <span style='font-size: 15px; display: block; margin-top: 10px;'>
                                Podrá ver cómo va quedando la plantilla en esta sección.
                            </span>
                        </div>
                    </div>`,
                    side: "left", 
                    align: 'start' 
                }
            },
            {
                popover: {
                    description: `<div class="d-flex justify-content-center align-items-center">
                        <div class="me-4">
                            <img src='../../img/logo.png' style='height: 5rem; width: 7rem;'/>
                        </div>
                        <div class="text-start">
                            <header id="driver-popover-title" class="driver-popover-title" style="display: block;">
                                Whats King
                            </header>
                            <span style='font-size: 15px; display: block; margin-top: 10px;'>
                                Con Whats King crecimiento y campañas al máximo nivel.
                            </span>
                        </div>
                    </div>`,
                }
            }
        ]
    });

    driverObj.drive();
}