<?php
/*
Template Name: contact
*/

include $_SERVER['DOCUMENT_ROOT'] . "/wp-content/themes/honey/get-field.php";

?>

<?php get_header(); ?>
    
    <main class="main page">

        <section class="contact">

            <div class="contact-box box">

                <div class="contact-content">

                    <div class="contact-top">

                        <div class="contact-l">

                            <h1 class="contact-title page-title">Контакты</h1>

                            <div class="footer-items">

                                <div class="footer-contact">

                                    <div class="footer-item">
        
                                        <div class="footer-icon">
                                            <img src="<?php bloginfo('template_url'); ?>/assets/img/footer/tel.svg" alt="telephone">
                                        </div>
        
                                        <div class="footer-item__info">
                                            <p class="footer-item__title">Номер телефона</p>
                                            <a href="tel:<?php echo $fieldValid; ?>" title="Телефон" aria-label="telephone" class="footer-item__link"><?php echo $fieldNum; ?></a>
                                        </div>
        
                                    </div>
        
                                    <div class="footer-item">
        
                                        <div class="footer-icon">
                                            <img src="<?php bloginfo('template_url'); ?>/assets/img/footer/mail.svg" alt="email">
                                        </div>
        
                                        <div class="footer-item__info">
                                            <p class="footer-item__title">Email</p>
                                            <a href="mailto:<?php echo $fieldMail; ?>" title="Email" aria-label="email" class="footer-item__link"><?php echo $fieldMail; ?></a>
                                        </div>
        
                                    </div>
        
                                </div>
        
                                <div class="footer-location">
        
                                    <div class="footer-item">
        
                                        <div class="footer-icon">
                                            <img src="<?php bloginfo('template_url'); ?>/assets/img/footer/location.svg" alt="location">
                                        </div>
        
                                        <div class="footer-item__info">
                                            <p class="footer-item__title">Адрес</p>
                                            <a href="tel:<?php echo $locationLink; ?>" title="Адрес" aria-label="adress" class="footer-item__link"><?php echo $fieldLocation; ?></a>
                                        </div>

                                    </div>
        
                                </div>

                                <div class="footer-soc">

                                    <a href="<?php echo $telegramLink; ?>" title="Перейти в телеграм" aria-label="telegram" class="footer-icon">
                                        <img src="<?php bloginfo('template_url'); ?>/assets/img/footer/telegram.svg" alt="telegram">
                                    </a>

                                    <a href="<?php echo $dzenLink; ?>" title="Перейти в Дзен" aria-label="dzen" class="footer-icon">
                                        <img src="<?php bloginfo('template_url'); ?>/assets/img/footer/dzen.svg" alt="dzen">
                                    </a>

                                </div>

                            </div>

                        </div>

                        <div class="contact-r">

                            <img src="<?php the_field('contact-img'); ?>" alt="map">

                        </div>

                    </div>

                    <div class="contact-bottom">

                        <form action="" class="form">

                            <?php echo do_shortcode('[contact-form-7 id="50" title="contact-form"]') ?>

                        </form>

                    </div>

                </div>

            </div>

        </section>

    </main>

<?php get_footer();?>