jQuery(document).ready(function ($) {
    

    $('#menu-toggle').on('click', function () {
        $('#mobile-menu').slideToggle(200);
        $(this).toggleClass('open'); // toggle "cross" state
        $(this).attr('aria-expanded', function (i, attr) {
            return attr === 'true' ? 'false' : 'true';
        });
    });
});
