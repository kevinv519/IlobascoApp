if ($('.cover').length){
    $('#my-navbar').toggleClass('navbar-bg');
}
$(window).scroll(function(e){
    if ($('.cover').length){
        var navbar = $('#my-navbar');
        var scrolled = $(window).scrollTop();
        if (scrolled <= ($('.cover').height() - navbar.height())) {
            navbar.css('background-color', 'rgba(51,51,51,' + (0.0015 * scrolled) + ')');
        } else {
            navbar.css('background-color', '#333333');
        }
    }
});

fontSize = 1;

// funcion para aumentar la fuente
document.getElementById('zoom-in').onclick = function () {
    document.getElementById('zoom-out').disabled = false;
    if (fontSize < 1.5){
        fontSize += 0.1;
        document.body.style.fontSize = fontSize + "em";
        this.disabled = fontSize >= 1.5;
    }
};

document.getElementById('zoom-out').onclick = function () {
    document.getElementById('zoom-in').disabled = false;
    if (fontSize > 1){
        fontSize -= 0.1;
        document.body.style.fontSize = fontSize + "em";
        this.disabled = fontSize <= 1;
    }
};