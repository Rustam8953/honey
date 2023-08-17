<?php

/*
Template Name: materials
*/

?>

<?php get_header(); ?>

<main class="main page">

    <section class="material">

        <div class="material-box box">

            <div class="material-content">

                <h1 class="material-title page-title">Метариалы</h1>

                <div class="material-items">

                    <?php
                        global $post;

                        $myposts = get_posts([ 
                            'numberposts' => -1,
                            'category_name' => 'materials-filter'
                        ]);

                        if( $myposts ){
                            foreach( $myposts as $post ){
                                setup_postdata( $post );
                                ?>
                                <!-- Вывод постов, функции цикла: the_title() и т.д. -->
                                <div class="material-item"><?php the_title(); ?></div>

                                <?php 
                            }
                        }

                        wp_reset_postdata(); // Сбрасываем $post
                    ?>

                    <!-- <div class="material-item">Запросить техническую документацию</div>
                    <div class="material-item">Запросить маркетинговые материалы</div>
                    <div class="material-item">Запросить сравнение с аналогами</div>
                    <div class="material-item">Выписка из единого реестра отечественного ПО</div> -->
                </div>

                <form action="" class="form">

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
                        <textarea name="message" title="Введите сообщение" id="" cols="30" rows="10" placeholder="начните вводить"></textarea>

                    </div>

                    <div class="form__submit">

                        <div class="form__policy">
                            <p>Нажимая отправить, вы соглашаетесь <a href="#" aria-label="policy" title="Ознакомиться с политикой обработки персональных данных">с политикой обработки персональных данных</a></p>
                        </div>

                        <div class="form__button">

                            <button class="form__btn block-btn">

                                <img src="<?php bloginfo('template_url'); ?>/assets/img/icon/security-icon-yellow.svg" alt="security-icon-yellow">

                                <p>Получить защиту</p>

                            </button>

                        </div>

                    </div> -->

                    <?php echo do_shortcode('[contact-form-7 id="213" title="materials-form"]') ?>

                </form>

            </div>

        </div>

    </section>

</main>

<?php get_footer(); ?>