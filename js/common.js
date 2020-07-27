$(document).ready(function() {
    $('.sidenav').sidenav();
    var options;
    if ($(window).width() < 400) {
        options = { dist: -100, padding: 0, numVisible: 1 }
    } else if ($(window).width() < 800) {
        options = { dist: 0, padding: 50, numVisible: 2 }
    } else {
        options = { dist: 0, padding: 100, numVisible: 4 }
    }

    $('.carousel').carousel(options);

    setInterval(() => {
        $('.carousel').carousel("next");
    }, 3000);

    $("#back").click(() => {
        $('.carousel').carousel("prev");
    });

    $("#forward").click(() => {
        $('.carousel').carousel("next");
    });
});

$
// document.addEventListener('DOMContentLoaded', function() {
//     M.AutoInit();
//     M.Carousel.init(document.querySelectorAll('.carousel'), { dist: 0, padding: 100, numVisible: 4 })
// });