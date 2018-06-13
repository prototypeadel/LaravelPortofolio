
console.log("salut");
$(window).scroll(function () {
    if ($(document).scrollTop() > 50) {
        $('nav').addClass('navcolor');
    } else {
        $('nav').removeClass('navcolor');
    }
});

