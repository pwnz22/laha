<h1>Настройки форматов записей</h1>
<?php settings_errors(); ?>
<?php


?>

<form method="post" action="options.php">
    <?php settings_fields('laha_theme_support'); ?>
    <?php do_settings_sections('laha_theme_post_formats'); ?>
    <?php submit_button(); ?>
</form>
