jQuery(function () {

    // Main page slider
    jQuery('.slider').slick({
        dots: true,
        responsive: [
        {
          breakpoint: 767,
          settings: {
            dots: false,
            arrows: false
          }
        },
    ]
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

    // Фотоотчеты
    jQuery('.popup-gallery').magnificPopup({
        delegate: 'a',
        type: 'image',
        tLoading: 'Загрузка фото #%curr%...',
        mainClass: 'mfp-img-mobile',
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0,1] // Will preload 0 - before current, and 1 after the current image
        },
        image: {
            tError: '<a href="%url%">Изображение #%curr%</a> не может быть загружено.',
            titleSrc: function(item) {
                return item.el.attr('title');
            }
        }
    });

});
