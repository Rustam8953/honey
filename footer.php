<?php

    include 'get-field.php';

?>

<footer class="footer">

    <div class="footer-box box">

        <div class="footer-content">

            <div class="footer-top">

                <!-- ССЫЛКИ -->

                <div class="footer-left">

                    <h2 class="footer-title block-title">
                        Остались вопросы?
                        <br>
                        Свяжитесь с нами!
                    </h2>

                    <div class="footer-items">

                        <div class="footer-contact">

                            <div class="footer-item">

                                <div class="footer-icon">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/footer/tel.svg" alt="telephone">
                                </div>

                                <div class="footer-item__info">
                                    <p class="footer-item__title">Номер телефона</p>
                                    <a href="tel:<?php echo $fieldValid; ?>" title="Телефон" aria-label="telephone-phone" class="footer-item__link"><?php echo $fieldNum; ?></a>
                                </div>

                            </div>

                            <div class="footer-item">

                                <div class="footer-icon">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/footer/mail.svg" alt="email">
                                </div>

                                <div class="footer-item__info">
                                    <p class="footer-item__title">Email</p>
                                    <a href="mailto:" title="Email" aria-label="email" class="footer-item__link"><?php echo $fieldMail; ?></a>
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
                                    <a href="https://yandex.ru/maps/-/CCUgUFFX0A" title="Адрес" aria-label="adress" class="footer-item__link"><?php echo $fieldLocation ?></a>
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

                <!-- ФОРМА -->

                <div class="footer-right">

                    <form class="form">

                        <!-- <div class="form__person">

                            <div class="form__input">
                                <p class="form__title">Ваше имя</p>
                                <input type="text" name="firstname" title="Введите имя" aria-label="name" placeholder="начните вводить" required>
                            </div>

                            <div class="form__input">
                                <p class="form__title">Email</p>
                                <input type="email" name="email" title="Введите вашу почту" aria-label="email" placeholder="начните вводить" required>
                            </div>

                        </div>

                        <div class="form__message">

                            <p class="form__title">Сообщение</p>
                            <textarea name="message" title="Введите сообщение" id="textarea" cols="30" rows="10" placeholder="начните вводить"></textarea>

                        </div>

                        <div class="form__submit">

                            <div class="form__policy">
                                <p>Нажимая отправить, вы соглашаетесь <a href="#" aria-label="policy" title="Ознакомиться с политикой обработки персональных данных">с политикой обработки персональных данных</a></p>
                            </div>

                            <div class="form__button">

                                <button type='submit' class="form__btn block-btn">

                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/icon/security-icon-yellow.svg" alt="security-icon-yellow">

                                    Получить защиту

                                </button>

                            </div>

                        </div> -->

                        <?php echo do_shortcode('[contact-form-7 id="50" title="contact-form"]') ?>

                    </form>

                </div>

            </div>

            <div class="footer-bottom">

                <div class="footer-ip">
                    
                    <?php the_custom_logo(); ?>

                    <p class="footer-text">
                        © <?php echo $ipInfo; ?>
                        <br>
                        ИНН: <?php echo $innInfo; ?>
                    </p>

                </div>

                <p class="footer-create reestr-3">

                    Создание сайта <a href="<?php echo $profileLink ?>" title="Контакты создателя сайта" aria-label="contact of the website creator"><?php echo $profileCreator; ?></a>

                </p>

                <div class="footer-reestr reestr-2">

                    <p class="footer-reestr__text">
                        Honey Corn в едином 
                        <br>
                        реестре отечественного ПО
                    </p>

                    <div class="footer-reestr__logo">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/footer/минцифры 1.svg" alt="logo-min">
                    </div>

                </div>

            </div>

        </div>

        <div class="footer-content__mobile">

            <p class="footer-text">
                © <?php echo $ipInfo; ?>
                <br>
                ИНН: <?php echo $innInfo; ?>
            </p>

            <p class="footer-create reestr-3">

                Создание сайта <a href="<?php echo $profileLink; ?>" title="Контакты создателя сайта" aria-label="contact of the website creator"><?php echo $profileCreator; ?></a>

            </p>

        </div>

    </div>

    <div class="footer-mobile">
        <img src="<?php bloginfo('template_url'); ?>/assets/img/footer/mobile-img.png" alt="mobile">
    </div>

</footer>

<?php wp_footer() ?>

<!-- <script src="./libs/swiper/swiper-bundle.min.js"></script>
<script src="./script/script.js"></script> -->
<!-- <script>
    const funcSwip = new Swiper('.function-swiper', {
        slidesPerView: 4,
        spaceBetween: 30,
        navigation: {
            nextEl: '.function-next',
            prevEl: '.function-prev'
        }
    })
</script> -->

</body>
</html>