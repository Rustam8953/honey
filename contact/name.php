<?php
/*
Template Name: home
*/

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
                                            <img src="./img/footer/tel.svg" alt="telephone">
                                        </div>
        
                                        <div class="footer-item__info">
                                            <p class="footer-item__title">Номер телефона</p>
                                            <a href="tel: +7 (383) 225-3-225" title="Телефон" aria-label="telephone" class="footer-item__link">+7 (383) 225-3-225</a>
                                        </div>
        
                                    </div>
        
                                    <div class="footer-item">
        
                                        <div class="footer-icon">
                                            <img src="./img/footer/mail.svg" alt="email">
                                        </div>
        
                                        <div class="footer-item__info">
                                            <p class="footer-item__title">Email</p>
                                            <a href="mailto: info@honeycorn.ru" title="Email" aria-label="email" class="footer-item__link">info@honeycorn.ru</a>
                                        </div>
        
                                    </div>
        
                                </div>
        
                                <div class="footer-location">
        
                                    <div class="footer-item">
        
                                        <div class="footer-icon">
                                            <img src="./img/footer/location.svg" alt="location">
                                        </div>
        
                                        <div class="footer-item__info">
                                            <p class="footer-item__title">Адрес</p>
                                            <a href="tel: +7 (383) 225-3-225" title="Адрес" aria-label="adress" class="footer-item__link">г. Новосибирск, Авиастроителей 39б</a>
                                        </div>

                                    </div>
        
                                </div>

                                <div class="footer-soc">

                                    <a href="#" title="Перейти в телеграм" aria-label="telegram" class="footer-icon">
                                        <img src="./img/footer/telegram.svg" alt="telegram">
                                    </a>

                                    <a href="#" title="Перейти в Дзен" aria-label="dzen" class="footer-icon">
                                        <img src="./img/footer/dzen.svg" alt="dzen">
                                    </a>

                                </div>

                            </div>

                        </div>

                        <div class="contact-r">

                            <img src="./img/contact/map.png" alt="map">

                        </div>

                    </div>

                    <div class="contact-bottom">

                        <form action="" class="form">

                            <div class="form__person">

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
                                <textarea name="message" title="Введите сообщение" id="" cols="30" rows="10" placeholder="начните вводить"></textarea>

                            </div>

                            <div class="form__submit">

                                <div class="form__policy">
                                    <p>Нажимая отправить, вы соглашаетесь <a href="#" aria-label="policy" title="Ознакомиться с политикой обработки персональных данных">с политикой обработки персональных данных</a></p>
                                </div>

                                <div class="form__button">

                                    <button class="form__btn block-btn">

                                        <img src="./img/icon/security-icon-yellow.svg" alt="security-icon-yellow">

                                        <p>Получить защиту</p>

                                    </button>

                                </div>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </section>

    </main>

<?php get_footer();?>