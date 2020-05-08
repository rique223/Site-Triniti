$(document).ready(function() {
    $(".owl-carousel").owlCarousel({
        margin: 10,
        loop: true,
        autowidth: true,
        items: 1,
        dots: true
    });
});

$(document).ready(function() {
    $("#txttelefone").mask("(00) 90000-0000");
});