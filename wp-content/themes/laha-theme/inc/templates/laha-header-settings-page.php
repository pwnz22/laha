<h1>Настройки шапки</h1>
<?php settings_errors(); ?>

<?php
$logo = esc_attr(get_option('site_logo'));
$title = esc_attr(get_option('site_name'));
?>

<div class="header">
    <img id="preview_site_logo"  src="<?= $logo; ?>" alt="">
    <h2 class="site_name"><?= $title; ?></h2>
</div>

<form class="laha-general-form" method="post" action="options.php">
    <?php settings_fields('laha_settings_group'); ?>
    <?php do_settings_sections('laha_theme'); ?>
    <?php submit_button('Сохранить изменения', 'primary', 'btnSubmit'); ?>
</form>