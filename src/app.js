// Libraries
import simpleParallax from 'simple-parallax-js';
window.bootstrap = require('bootstrap/dist/js/bootstrap.bundle.js');

// Local Scripts
import '../src/smooth-scrolling';
import '../src/form-ajax';
import '../src/aos';
import '../src/carousels';
import '../src/modals';

// Header
$(function () {
    // Cachea el objeto jQuery que contiene el elemento #navbar
    var header = $("#navbar");

    function updateScroll() {
        var scroll = $(window).scrollTop();

        if (scroll >= 1) {
            header.addClass('navbar-scroll');
        } else {
            header.removeClass("navbar-scroll");
        }
    }

    $(function () {
        $(window).scroll(updateScroll);
        updateScroll();
    });
});

// Menú de navegación
$('#mburger').click(function (e) {
    e.stopPropagation();
    $('.menu').toggleClass('menu-abierto');
    $('#navbar').toggleClass('opacity-0');
    $('#backdrop').toggleClass('backdrop-opacity-1');
});

$('.menu').click(function (e) {
    e.stopPropagation();
});

$('body,html').click(function (e) {
    $('.menu').removeClass('menu-abierto');
    $('#navbar').removeClass('opacity-0');
    $('#backdrop').removeClass('backdrop-opacity-1');
});

document.getElementById("cerrar-menu").addEventListener("click", cerrarMenu, false);
document.getElementById("btn-logo").addEventListener("click", cerrarMenu, false);

for( let i = 1; i < 5; i++ ) { // Cambiar por número de botones de navegación que se vayan a necesitar (-1)
    document.getElementById(`btn-nav-${i}`).addEventListener("click", cerrarMenu, false);
}

document.getElementById("btn-contacto").addEventListener("click", cerrarMenu, false);

function cerrarMenu() {
    $('.menu').removeClass('menu-abierto');
    $('#navbar').removeClass('opacity-0');
    $('#backdrop').removeClass('backdrop-opacity-1');
}

// Cerrar menú con Esc
document.addEventListener('keydown', (event) => {
    if (event.key === 'Escape') {
        cerrarMenu();
    }
});

// Activar popovers
const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]');
const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl));

// Parallax elements
let descansoVegetales = document.getElementsByClassName('bg-descanso-vegetales');
new simpleParallax(descansoVegetales, {
	delay: .6,
	transition: 'cubic-bezier(0,0,0,1)'
});

let oportunidadDeCrecimiento = document.getElementsByClassName('bg-oportunidad-de-crecimiento');
new simpleParallax(oportunidadDeCrecimiento, {
	delay: .6,
	transition: 'cubic-bezier(0,0,0,1)'
});