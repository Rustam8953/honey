<?php

    include 'get-field.php';

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php bloginfo('template_url'); ?>/assets/img/logo/head-icon.svg">
    <?php wp_head() ?>
</head>
<body>

    <header class="header">

        <div class="header-box box">

            <div class="header-block">

                <div class="header-content">
    
                    <?php the_custom_logo(); ?>
        
                    <nav class="header-nav">

                        <?php wp_nav_menu(array('container_class' => 'header-nav' , 'theme_location' => 'primary')); ?>
        
                        <!-- <ul class="header-list">
        
                            <li><a href="http://honey.newway.site/" class="header-link" aria-label="Home">Главная</a></li>
        
                            <li><a href="http://honey.newway.site/" class="header-link" aria-label="About">О нас</a></li>
        
                            <li><a href="http://honey.newway.site/" class="header-link" aria-label="function">Функционал</a></li>
        
                            <li><a href="http://honey.newway.site/contact" class="header-link" aria-label="Contact">Контакты</a></li>
        
                            <li><a href="http://honey.newway.site/feeding" class="header-link" aria-label="Feed">Отзывы</a></li>
        
                            <li><a href="http://honey.newway.site/openings" class="header-link" aria-label="Home">Вакансии</a></li>
        
                        </ul> -->
    
                        <div class="header-mobile">
                            <button class="header-mobile__btn">Узнать больше</button>
                        </div>
        
                    </nav>
    
                    <div class="header-button">
    
                        <a href="<?php echo $telegramLink ?>" aria-label="telegram" class="header-telegram" title="Перейти в телеграм">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/icon/yellow-telegram.svg" alt="telegram">
                        </a>
    
                        <button class="block-btn header-btn">
                            Узнать больше
                        </button>
    
                    </div>
    
                    <div class="header-burger">
                        <div class="header-line"></div>
                    </div>
    
                </div>

            </div>

            <nav class="header-mobile__nav">

                <?php wp_nav_menu(array('container_class' => 'main-nav' , 'theme_location' => 'primary')); ?>
        
                <!-- <ul class="header-list">

                    <li><a href="http://honey.newway.site/" class="header-link" aria-label="Home">Главная</a></li>

                    <li><a href="http://honey.newway.site/" class="header-link" aria-label="About">О нас</a></li>

                    <li><a href="http://honey.newway.site/" class="header-link" aria-label="function">Функционал</a></li>

                    <li><a href="http://honey.newway.site/contact" class="header-link" aria-label="Contact">Контакты</a></li>

                    <li><a href="http://honey.newway.site/feedings" class="header-link" aria-label="Feed">Отзывы</a></li>

                    <li><a href="http://honey.newway.site/openings" class="header-link" aria-label="Home">Вакансии</a></li>

                </ul> -->

                <div class="header-mobile">
                    <button class="header-mobile__btn">Узнать больше</button>
                </div>

            </nav>

        </div>

        <div class="header-back"></div>

    </header>