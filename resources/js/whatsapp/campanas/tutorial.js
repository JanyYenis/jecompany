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
                                Bienvenido a tus Campañas
                            </header>
                            <span style='font-size: 15px; display: block; margin-top: 10px;'>
                                Aquí encontrarás todas las campañas que se han enviado a través de Whats King.
                            </span>
                        </div>
                    </div>`,
                    side: "left", 
                    align: 'start' 
                }
            },
            { 
                element: '#tutorialCrearCampana',
                popover: {
                    description: `<div class="d-flex justify-content-center align-items-center">
                        <div class="me-4">
                            <img src='../../img/logo.png' style='height: 5rem; width: 7rem;'/>
                        </div>
                        <div class="text-start">
                            <header id="driver-popover-title" class="driver-popover-title" style="display: block;">
                                Crear Campaña
                            </header>
                            <span style='font-size: 15px; display: block; margin-top: 10px;'>
                                Para crear una nueva campaña, puedes darle clic al botón CREAR CAMPAÑA. Este desplegará un modal con los campos necesarios para crear una nueva campaña.
                            </span>
                        </div>
                    </div>`,
                    side: "left", 
                    align: 'start' 
                }
            },
            { 
                element: '#tutorialTablacampana',
                popover: {
                    description: `<div class="d-flex justify-content-center align-items-center">
                        <div class="me-4">
                            <img src='../../img/logo.png' style='height: 5rem; width: 7rem;'/>
                        </div>
                        <div class="text-start">
                            <header id="driver-popover-title" class="driver-popover-title" style="display: block;">
                                Listado de campañas
                            </header>
                            <span style='font-size: 15px; display: block; margin-top: 10px;'>
                                En este listado podrás encontrar el listado de campañas que se han enviado a través de Whats King.
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
                element: '#tutorialEspecialidad',
                popover: { 
                    description: `<div class="d-flex justify-content-center align-items-center">
                        <div class="me-4">
                            <img src='../../../img/logo.png' style='height: 5rem; width: 7rem;'/>
                        </div>
                        <div class="text-start">
                            <header id="driver-popover-title" class="driver-popover-title" style="display: block;">
                                Especialidades
                            </header>
                            <span style='font-size: 15px; display: block; margin-top: 10px;'>
                                Seleccione una o varias especialidades. Según la o las especialidades, se filtraron a los médicos disponibles para enviar la campaña.
                            </span>
                        </div>
                    </div>`,
                    side: "left", 
                    align: 'start' 
                }
            },
            { 
                element: '#tutorialMaterial',
                popover: {
                    description: `<div class="d-flex justify-content-center align-items-center">
                        <div class="me-4">
                            <img src='../../img/logo.png' style='height: 5rem; width: 7rem;'/>
                        </div>
                        <div class="text-start">
                            <header id="driver-popover-title" class="driver-popover-title" style="display: block;">
                                Material
                            </header>
                            <span style='font-size: 15px; display: block; margin-top: 10px;'>
                                Podrá seleccionar un material, entre esos están: Información, invitación, pódcast.
                            </span>
                        </div>
                    </div>`,
                    side: "left", 
                    align: 'start' 
                }
            },
            { 
                element: '#tutorialPlantilla',
                popover: {
                    description: `<div class="d-flex justify-content-center align-items-center">
                        <div class="me-4">
                            <img src='../../img/logo.png' style='height: 5rem; width: 7rem;'/>
                        </div>
                        <div class="text-start">
                            <header id="driver-popover-title" class="driver-popover-title" style="display: block;">
                                Plantilla
                            </header>
                            <span style='font-size: 15px; display: block; margin-top: 10px;'>
                                Podrá seleccionar una plantilla aprobada por META. Una vez seleccionada, se mostrarán los campos necesarios para el uso de esta.
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
                                Previsualización de la campaña.
                            </header>
                            <span style='font-size: 15px; display: block; margin-top: 10px;'>
                                Podrá ver cómo va quedando la campaña.
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