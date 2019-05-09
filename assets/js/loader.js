$(document).ready(function($) {
    var Body = $('body');
    Body.addClass('preloader-site');
});
$(window).ready(function() {
    $('.preloader-wrapper').fadeOut();
    $('body').removeClass('preloader-site');
});
