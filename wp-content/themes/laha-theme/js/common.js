jQuery(function () {

    // Main page slider
    jQuery('.slider').slick({
        dots: true
    });

    // Загрузка мероприятий
    jQuery('.events_years_item a').on('click', function (e) {
        e.preventDefault();
        var that = jQuery(this);
        var ajaxURL = that.parent().data('url');
        var year = that.html();

        jQuery('.events_years_item').removeClass('active');
        jQuery('.ajax_loader').css('display', 'inline-block');

        jQuery.ajax({
            url: ajaxURL,
            type: 'post',
            data: {
                year: year,
                action: 'laha_load_posts_by_year'
            }
        }).done(function (data) {
            that.parent().addClass('active');
            jQuery('.ajax_loader').hide();
            jQuery('.events_table').html(data);
        })
    });

});
