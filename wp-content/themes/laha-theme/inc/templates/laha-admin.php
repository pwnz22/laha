<h1>Главные настройки темы</h1>
<?php settings_errors(); ?>

<form method="post" action="options.php">
    <?php settings_fields('laha_settings_group'); ?>
    <?php do_settings_sections('laha_theme'); ?>
    <?php submit_button(); ?>
</form>