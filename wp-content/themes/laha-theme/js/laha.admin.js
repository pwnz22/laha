jQuery(function () {

    var mediaUploader;

    jQuery('#upload-button').on('click', function (e) {
        e.preventDefault();

        if (mediaUploader) {
            mediaUploader.open();
            return;
        }

        mediaUploader = wp.media.frames.file_frame = wp.media({
            title: 'Выбрать лого',
            button: {
                text: 'Загрузить'
            },
            multiple: false
        });

        mediaUploader.on('select', function () {
            attachment = mediaUploader.state().get('selection').first().toJSON();
            jQuery('#site_logo').val(attachment.url);
            jQuery('#preview_site_logo').attr('src', attachment.url);
        });

        mediaUploader.open();
    });

    jQuery('#remove-button').on('click', function (e) {
        e.preventDefault();
        var answer = confirm('Вы уверенны что хотите удалить текущий лого?')
        if(answer == true) {
            jQuery('#site_logo').val('');
            jQuery('.laha-general-form').submit();
        }
        return;
    });
});