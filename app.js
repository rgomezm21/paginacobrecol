$(document).ready(function() {
    var caja = $("#caja");

    function fondo() {
        $(this).css("background", "black")
            .css("color", "white");
    }

    function salir() {
        $(this).css("background", " lavender")
            .css("color", "black");
    }
    caja.hover(fondo, salir);
})
$(document).ready(function() {
    var caja1 = $("#caja1");

    function fondo() {
        $(this).css("background", "black")
            .css("color", "white");
    }

    function salir() {
        $(this).css("background", " lavender")
            .css("color", "black");
    }
    caja1.hover(fondo, salir);
})


window.addEventListener('scroll', function() {
    let animacion = document.getElementById('animado');
    let posicionh1 = animacion.getBoundingClientRect().top;
    let tamaño = window.innerHeight / 2;

    if (posicionh1 < tamaño) {
        animacion.style.animation = 'mover 1s ease-out'
    }
})
$('.carousel').carousel({
    interval: 2000
});