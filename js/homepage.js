/**
 * Author: Jeff Saenz
 */
$(function() {
    $('.homepage .video').click(function() {
        $('.homepage .video .iframe').append('<iframe width="496" height="301" src="http://www.youtube.com/embed/KTbQL_jHIVU?fs=1&autoplay=1&loop=1&version=3&autohide=1&showinfo=0" frameborder="0" allowfullscreen></iframe>');
        $('.homepage .video .iframe').fadeIn(700);
        $('.homepage .video img').fadeOut(700);
    });
})
