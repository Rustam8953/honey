<?php

/*
Template Name: feed
*/

?>

<?php get_header(); ?>

<main class="main page">

    <section class="feed">

        <div class="feed-box box">

            <div class="feed-content">

                <h1 class="feed-title page-title">Клиенты о нас</h1>

                <div class="feed-items">

                    <?php $args = array(
                        'numberposts' => -1,
                        'category_name' => 'feedings'
                        );

                        $query = new WP_Query( $args );
                        if ( $query->have_posts() ) {
                            while ( $query->have_posts() ) {
                            $query->the_post();?>
                                <!-- Вывод постов, функции цикла: the_title() и т.д. -->
                                <div class="feed-item">

                                    <?php
                                        $dom = new domDocument();
                                        $dom->loadHTML('<meta http-equiv="Content-Type" content="charset=utf-8" />' .  the_content() );
                                        $xpath = new domXpath($dom);
                                        foreach($xpath->query('//p[@class="feed-profile__subtitle"]') as $p) {
                                            echo $dom->saveHTML($p) ."\n";
                                        }
                                    ?>

                                    <div class="feed-profile">

                                        <div class="feed-profile__img">
                                            <img src="<?php bloginfo('template_url'); ?>/assets/img/feed/profile.png" alt="profile-img">
                                        </div>

                                        <div class="feed-profile__info">

                                            <p class="feed-profile__name"><?php the_title(); ?></p>
                                            
                                            <?php
                                                $dom = new domDocument();
                                                $dom->loadHTML('<meta http-equiv="Content-Type" content="charset=utf-8" />' .  the_content() );
                                                $xpath = new domXpath($dom);
                                                foreach($xpath->query('//p[@class="feed-profile__subtitle"]') as $p) {
                                                    echo $dom->saveHTML($p) ."\n";
                                                }
                                            ?>

                                        </div>

                                    </div>

                                </div>
                                <?php 
                            }
                        }

                        wp_reset_postdata(); // Сбрасываем $post
                    ?>

                </div>

                <div class="feed-button">
                    <button class="feed-btn btn-feed" aria-label="feed">Оставить отзыв</button>
                </div>

            </div>
            
        </div>

    </section>

</main>

<?php get_footer(); ?>