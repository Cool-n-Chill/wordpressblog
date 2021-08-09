<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php wp_head() ?>

</head>
<body>
<header class="header">
    <div class="container">
        <div class="header-menu">
            <div class="header__burger">
                <i class="bi-list"></i>
            </div>
            <nav class="header__menu">
                <?php wp_nav_menu(array(
                    'theme_location' => 'header-menu',
                    'container' => false,
                    'menu_class' => 'header__list',
                )) ?>
                <div class="menu__social-and-search">
                    <a href="" class="social__link"><i class="bi-rss"></i></a>
                    <a href="" class="social__link"><i class="bi-twitter"></i></a>
                    <a href="" class="social__link"><i class="bi-github"></i></a>
                    <a href="" class="social__link"><i class="bi-facebook"></i></a>
                    <i class="bi-search"></i>
                </div>
                <button class="menu__close"><i class="bi bi-x-lg"></i></button>
            </nav>
            <div class="header__logo">
                <a class="header__link" href="<?php echo home_url() ?>">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/Logo.png" alt="" class="logo">
                    <span class="logo-text">blog</span>
                </a>
            </div>
            <div class="header__social-and-search">
                <a href="" class="social__link"><i class="bi-rss"></i></a>
                <a href="" class="social__link"><i class="bi-twitter"></i></a>
                <a href="" class="social__link"><i class="bi-github"></i></a>
                <a href="" class="social__link"><i class="bi-facebook"></i></a>
                <i class="bi-search"></i>
            </div>
        </div>
    </div>
</header>