<!DOCTYPE html>
<html class="no-js" lang="ru">

<head>

    <meta charset="utf-8">

    <title>Заголовок</title>
    <meta name="description" content="">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <meta property="og:image" content="<?= get_template_directory_uri(); ?>/img/logo.png">

    <link rel="shortcut icon" href="<?= get_template_directory_uri(); ?>/img/favicon/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?= get_template_directory_uri(); ?>/img/favicon/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?= get_template_directory_uri(); ?>/img/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?= get_template_directory_uri(); ?>/img/favicon/apple-touch-icon-114x114.png">

    <?php wp_head(); ?>

</head>

<body>

<!-- HEADER -->

<header class="header">
    <div class="container">
        <div class="header_item">
            <img src="<?= esc_attr(get_option('site_logo')); ?>" alt="logo">
            <div class="header_descr">
                <h1 class="header_item__title"><?= esc_attr(get_option('site_name')); ?></h1>
                <div class="header_item__descr">
                    <p>*Laser and health academy</p>
                    <a href="http://www.laserandhealthacademy.com/" target="_blank" class="pull-right">www.laserandhealthacademy.com</a>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- NAVBAR MENU -->

<nav class="main_navbar clearfix">
    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="navbar-brand menu-text visible-xs-block">меню</div>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <div class="navbar_wrapper clearfix">
                <ul class="navbar_menu clearfix">
                    <li class="navbar_menu-item">
                        <a href="#">о нас</a>
                    </li>
                    <li class="navbar_menu-item">
                        <a href="#">мероприятия</a>
                    </li>
                    <li class="navbar_menu-item">
                        <a href="#">эксперты</a>
                    </li>
                    <li class="navbar_menu-item">
                        <a href="#">фото / видео</a>
                    </li>
                    <li class="navbar_menu-item">
                        <a href="#">вопрос / ответ</a>
                    </li>
                    <li class="navbar_menu-item">
                        <a href="#">контакты</a>
                    </li>
                </ul>
            </div><!-- .navbar_wrapper -->
        </div><!-- .navbar-collapse -->
    </div><!-- .container -->
</nav><!-- .main_navbar -->