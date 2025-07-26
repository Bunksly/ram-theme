jQuery(function ($) {
    let page = 2; // we already loaded page 1
    let loading = false;

    $('#portfolio-next').on('click', function () {
        if (loading) return;
        loading = true;

        $.post(ramAjax.ajaxurl, {
            action: 'ram_load_more_portfolio',
            page: page
        }, function (response) {
            if (response) {
                $('#portfolio-slider').append(response);
                page++;
            }
            loading = false;
        });
    });

    $('#portfolio-prev').on('click', function () {
        // Optional: handle prev functionality
        alert('Prev not implemented yet!');
    });
});
