<?php
    /*
    Template Name: home
    */
?>

<?php get_header(); ?>
    
    <main class="main">

        <section class="banner">

            <div class="banner-box box">

                <div class="banner-swiper swiper">

                    <div class="banner-wrapper swiper-wrapper">

                        <div class="banner-slide swiper-slide" data-slide-name=" — 01">

                            <div class="banner-content">

                                <div class="banner-info">
            
                                    <h2 class="banner-title">
                                        Создай сценарии реагирования 
                                        <br>
                                        на <span class="blue">кибератаки</span> основываясь 
                                        <br>
                                        на инцидентах <span class="yellow">HoneyCorn</span>
                                    </h2>
            
                                    <div class="banner-button">
                                        <button class="block-btn btn-protect__yellow" aria-label="Get protection">
                                            <img src="<?php bloginfo('template_url'); ?>/assets/img/icon/security-safe.svg" alt="security-safe">
                                            Получить защиту
                                        </button>
                                        <button class="block-btn btn-more" aria-label="To learn more">
                                            Узнать больше
                                        </button>
                                    </div>
            
                                </div>
            
                                <div class="banner-img">
                                    <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/banner/Layer_1.png" alt="layer-1">
                                </div>
                                
                            </div>

                        </div>

                        <div class="banner-slide swiper-slide" data-slide-name=" — 02">

                            <div class="banner-content">

                                <div class="banner-info">
            
                                    <h2 class="banner-title">
                                        Создай сценарии реагирования 
                                        <br>
                                        на <span class="blue">кибератаки</span> основываясь 
                                        <br>
                                        на инцидентах <span class="yellow">HoneyCorn</span>
                                    </h2>
            
                                    <div class="banner-button">
                                        <button class="block-btn btn-protect__yellow" aria-label="Get protection">
                                            <img src="<?php bloginfo('template_url'); ?>/assets/img/icon/security-safe.svg" alt="security-safe">
                                            Получить защиту
                                        </button>
                                        <button class="block-btn btn-more" aria-label="To learn more">
                                            Узнать больше
                                        </button>
                                    </div>
            
                                </div>
            
                                <div class="banner-img">
                                    <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/banner/Layer_1.png" alt="layer-1">
                                </div>
                                
                            </div>

                        </div>

                        <div class="banner-slide swiper-slide" data-slide-name=" — 03">

                            <div class="banner-content">

                                <div class="banner-info">
            
                                    <h2 class="banner-title">
                                        Создай сценарии реагирования 
                                        <br>
                                        на <span class="blue">кибератаки</span> основываясь 
                                        <br>
                                        на инцидентах <span class="yellow">HoneyCorn</span>
                                    </h2>
            
                                    <div class="banner-button">
                                        <button class="block-btn btn-protect__yellow" aria-label="Get protection">
                                            <img src="<?php bloginfo('template_url'); ?>/assets/img/icon/security-safe.svg" alt="security-safe">
                                            Получить защиту
                                        </button>
                                        <button class="block-btn btn-more" aria-label="To learn more">
                                            Узнать больше
                                        </button>
                                    </div>
            
                                </div>
            
                                <div class="banner-img">
                                    <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/banner/Layer_1.png" alt="layer-1">
                                </div>
                                
                            </div>

                        </div>

                    </div>

                    <div class="banner-pagination swiper-pagination"></div>

                </div>

                <div class="banner-text">
                    <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/banner/text.png" alt="banner-text">
                </div>
                <div class="banner-dots">
                    <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/banner/Group 152.png" alt="dots">
                </div>
                <div class="banner-dots middle">
                    <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/banner/Group 152.png" alt="dots">
                </div>

            </div>

            <div class="banner-layer top">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/banner/Group.png" alt="layer-1">
            </div>
            <!--
            <div class="banner-layer middle">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/banner/layer 2.png" alt="layer-2">
            </div>
            <div class="banner-layer bottom">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/banner/layer 3.png" alt="layer-3">
            </div> -->

        </section>

        <section class="about">
            <div class="about-box box">

                <div class="about-content">

                    <div class="about-l">
                        <img loading="lazy" src="<?php the_field('subtitle-honey-img') ?>" alt="about-img">
                    </div>

                    <div class="about-r">
                        
                        <p class="about-subtitle block-subtitle"><?php the_field('subtitle-honey') ?></p>
                        <h2 class="about-title block-title"><?php the_field('title-honey') ?></h2>

                        <p class="about-text">

                            <?php the_field('text-honey') ?>

                        </p>

                    </div>

                </div>

            </div>
        </section>

        <section class="opport">

            <div class="opport-box box">
                <div class="opport-content">

                    <p class="opport-subtitle block-subtitle">Узнайте больше о HONEY CORN</p>
                    <h2 class="opport-title block-title">Возможности системы</h2>

                    <div class="opport-swiper">

                        <div class="opport-wrapper">

                            <?php
                                global $post;

                                $myposts = get_posts([ 
                                    'numberposts' => -1,
                                    'category_name' => 'system'
                                ]);

                                if( $myposts ){
                                    foreach( $myposts as $post ){
                                        setup_postdata( $post );
                                        ?>
                                        <!-- Вывод постов, функции цикла: the_title() и т.д. -->
                                        <div class="opport-item">

                                            <div class="opport-item__img">

                                                <?php
                                                    the_post_thumbnail();
                                                ?>

                                                <!-- <img src="<?php bloginfo('template_url'); ?>/assets/img/opport/Disorientation.png" alt="opport-img"> -->
                                            </div>

                                            <h2 class="opport-item__title"><?php the_title() ?></h2>

                                            <div class="opport-item__text"><?php the_content() ?></div>

                                        </div>
                                        <?php 
                                    }
                                }

                                wp_reset_postdata(); // Сбрасываем $post
                            ?>

                            <!-- <div class="opport-item">

                                <div class="opport-item__img">
                                    <img src="/assets/img/opport/Disorientation.png" alt="opport-img">
                                </div>

                                <h2 class="opport-item__title">Дезориентация</h2>

                                <p class="opport-item__text">
                                    Навязывание ложных целей 
                                    с функционалом HoneyPot, формирование иллюзий работы 
                                    в реальной информационной среде 
                                    с функционалом Deception системы, уменьшение поверхности кибератак.
                                </p>

                            </div>

                            <div class="opport-item">

                                <div class="opport-item__img">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/opport/Detection.png" alt="opport-img">
                                </div>

                                <h2 class="opport-item__title">Обнаружение</h2>

                                <p class="opport-item__text">
                                    Логирование обращений злоумышленника к сенсорам HoneyPot, логирование попыток эксплуатаций, логирование кибератак
                                </p>

                            </div>

                            <div class="opport-item">

                                <div class="opport-item__img">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/opport/Response.png" alt="opport-img">
                                </div>

                                <h2 class="opport-item__title">Реагирование</h2>

                                <p class="opport-item__text">
                                    Автоматическое реагирование при сработках системы, возможность использования разных сценариев при разных типах кибератак. 
                                </p>

                            </div>

                            <div class="opport-item">

                                <div class="opport-item__img">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/opport/Enrichment.png" alt="opport-img">
                                </div>

                                <h2 class="opport-item__title">Обогащение</h2>

                                <p class="opport-item__text">
                                    Интеграция с любыми Центрами мониторинга, исключение ложноположительных сработок, передача расширенных данных о кибератаках. 
                                </p>

                            </div> -->

                        </div>

                    </div>

                </div>
            </div>

        </section>

        <section class="function">

            <div class="function-box">

                <div class="function-content">

                    <div class="function-head">
                        <h2 class="function-title block-title">
                            Функционал системы
                            <br>
                            HONEY CORN
                        </h2>
                        <div class="function-button">
                            <button class="function-btn block-btn btn-protect__yellow">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/icon/security-safe.svg" alt="security-safe">
                                Получить защиту
                            </button>
                        </div>
                    </div>

                    <div class="function-img">
                        <div class="function-img__box">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/function/Group 229.png" alt="function-img">
                        </div>
                    </div>

                    <div class="function-button function-button__mobile">
                        <button class="function-btn block-btn btn-protect__yellow">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/icon/security-safe.svg" alt="security-safe">
                            Получить защиту
                        </button>
                    </div>
                    
                </div>

            </div>

            <div class="function-block">

                <div class="function-block__box">

                    <div class="function-head">

                        <h2 class="function-title block-title">
                            Полный функционал
                            <br>
                            HONEY CORN
                        </h2>

                        <div class="function-swiper__btn">

                            <div class="swiper-button-prev function-prev function-arrow"></div>
                            <div class="swiper-button-next function-next function-arrow"></div>

                        </div>

                    </div>

                    <div class="function-swiper swiper">

                        <div class="function-wrapper swiper-wrapper">

                            <?php
                                global $post;

                                $myposts = get_posts([ 
                                    'numberposts' => -1,
                                    'category_name' => 'swiper-function'
                                ]);

                                if( $myposts ){
                                    foreach( $myposts as $post ){
                                        setup_postdata( $post );
                                        ?>
                                        <!-- Вывод постов, функции цикла: the_title() и т.д. -->
                                        <div class="function-slide swiper-slide">

                                            <h2 class="function-slide__title">
                                                <?php the_title(); ?>
                                            </h2>

                                            <p class="function-slide__text">
                                                <?php the_content(); ?>
                                            </p>

                                        </div>
                                        <?php 
                                    }
                                }

                                wp_reset_postdata(); // Сбрасываем $post
                            ?>

                            

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <section class="test">

            <div class="test-box box">

                <div class="test-content">

                    <div class="test-l">
                        <img src="<?php the_field('test-img') ?>" alt="test-img">
                    </div>

                    <div class="test-r">

                        <h2 class="test-title block-title">
                            <?php the_field('title-test') ?>
                        </h2>

                        <p class="test-text">
                            <?php the_field('subtitle-test') ?>
                        </p>

                        <div class="test-button">
                            <button class="test-btn block-btn">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/icon/security-icon-light.svg" alt="security-safe">
                                Получить защиту
                            </button>
                        </div>

                    </div>

                </div>

            </div>

        </section>

        <section class="company">

            <div class="company-box">

                <div class="company-content">

                    <h2 class="company-title"><?php the_field('title-company'); ?></h2>

                    <div class="company-wrapper">

                        <div class="company-items">
                            <div class="company-item">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/icon/vk (1).svg" alt="vk">
                            </div>
                            <div class="company-item">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/icon/vk (1).svg" alt="vk">
                            </div>
                            <div class="company-item">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/icon/vk (1).svg" alt="vk">
                            </div>
                            <div class="company-more">
                                25+
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </section>

    </main>

    <div class="modal"></div>

<?php get_footer();?>
