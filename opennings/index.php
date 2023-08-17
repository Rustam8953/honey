<?php

/*
Template Name: opening
*/

?>

<?php get_header(); ?>

<main class="main page">

    <section class="job">

        <div class="job-box box">

            <div class="job-content">

                <h1 class="job-title page-title"><?php the_field('title-openings'); ?></h1>

                <div class="job-items">

                    <div class="job-item">

                        <div class="job-item__post">
                            <p class="job-item__subtitle">Должность</p>
                            <p class="job-item__title">Разработчик програмного обеспечения</p>
                        </div>

                        <div class="job-item__location">
                            <p class="job-item__subtitle">Локация</p>
                            <p class="job-item__title">Москва / удаленно</p>
                        </div>

                        <div class="job-item__price">
                            <p class="job-item__subtitle">Оклад</p>
                            <p class="job-item__title">от 500 000 руб.</p>
                        </div>

                        <div class="job-item__button">
                            <button class="job-item__btn btn-feed">Узнать больше</button>
                        </div>

                    </div>

                    <div class="job-item">

                        <div class="job-item__post">
                            <p class="job-item__subtitle">Должность</p>
                            <p class="job-item__title">Разработчик програмного обеспечения</p>
                        </div>

                        <div class="job-item__location">
                            <p class="job-item__subtitle">Локация</p>
                            <p class="job-item__title">Москва / удаленно</p>
                        </div>

                        <div class="job-item__price">
                            <p class="job-item__subtitle">Оклад</p>
                            <p class="job-item__title">от 500 000 руб.</p>
                        </div>

                        <div class="job-item__button">
                            <button class="job-item__btn btn-feed">Узнать больше</button>
                        </div>

                    </div>

                    <div class="job-item">

                        <div class="job-item__post">
                            <p class="job-item__subtitle">Должность</p>
                            <p class="job-item__title">Разработчик програмного обеспечения</p>
                        </div>

                        <div class="job-item__location">
                            <p class="job-item__subtitle">Локация</p>
                            <p class="job-item__title">Москва / удаленно</p>
                        </div>

                        <div class="job-item__price">
                            <p class="job-item__subtitle">Оклад</p>
                            <p class="job-item__title">от 500 000 руб.</p>
                        </div>

                        <div class="job-item__button">
                            <button class="job-item__btn btn-feed">Узнать больше</button>
                        </div>

                    </div>

                    <div class="job-item">

                        <div class="job-item__post">
                            <p class="job-item__subtitle">Должность</p>
                            <p class="job-item__title">Разработчик програмного обеспечения</p>
                        </div>

                        <div class="job-item__location">
                            <p class="job-item__subtitle">Локация</p>
                            <p class="job-item__title">Москва / удаленно</p>
                        </div>

                        <div class="job-item__price">
                            <p class="job-item__subtitle">Оклад</p>
                            <p class="job-item__title">от 500 000 руб.</p>
                        </div>

                        <div class="job-item__button">
                            <button class="job-item__btn btn-feed">Узнать больше</button>
                        </div>

                    </div>

                    <div class="job-item">

                        <div class="job-item__post">
                            <p class="job-item__subtitle">Должность</p>
                            <p class="job-item__title">Разработчик програмного обеспечения</p>
                        </div>

                        <div class="job-item__location">
                            <p class="job-item__subtitle">Локация</p>
                            <p class="job-item__title">Москва / удаленно</p>
                        </div>

                        <div class="job-item__price">
                            <p class="job-item__subtitle">Оклад</p>
                            <p class="job-item__title">от 500 000 руб.</p>
                        </div>

                        <div class="job-item__button">
                            <button class="job-item__btn btn-feed">Узнать больше</button>
                        </div>

                    </div>

                </div>

                <div class="job-resum">

                    <p class="job-resum__title">
                        <?php the_field('text-openings'); ?>
                    </p>

                    <div class="job-resum__mail">
                        <p class="job-resum__subtitle">Email</p>
                        <a href="mailto:<?php the_field('email-hr'); ?>" aria-label="resum" title="Отправить резюме" class="job-resum__link"><?php the_field('email-hr'); ?></a>
                    </div>

                </div>

            </div>

        </div>

    </section>

</main>

<?php get_footer(); ?>