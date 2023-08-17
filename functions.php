<?php

     // правильный способ подключить стили и скрипты
    add_action( 'wp_enqueue_scripts', function () {
        wp_enqueue_style( 'reset', get_template_directory_uri() . '/assets/css/reset.min.css' );
        wp_enqueue_style( 'swiper-bundle', get_template_directory_uri() . '/assets/libs/swiper/swiper-bundle.min.css' );
        wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css<?php echo date("isu") ?>' );


        wp_enqueue_script( 'swiper-bundle', get_template_directory_uri() . '/assets/libs/swiper/swiper-bundle.min.js', array(), 'null', true );
        wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/script/script.js<?php echo date("isu") ?>', array('swiper-bundle'), 'null', true );
    });

    function wptutplus_register_theme_menu() {
        register_nav_menu('primary', 'Main Navigation Menu');
    };

    add_action('init', 'wptutplus_register_theme_menu');

    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('custom-logo');


    add_filter( 'upload_mimes', 'svg_upload_allow' );

    # Добавляет SVG в список разрешенных для загрузки файлов.
    function svg_upload_allow( $mimes ) {
        $mimes['svg']  = 'image/svg+xml';

        return $mimes;
    }
    add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );

    # Исправление MIME типа для SVG файлов.
    function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){

        // WP 5.1 +
        if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) ){
            $dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
        }
        else {
            $dosvg = ( '.svg' === strtolower( substr( $filename, -4 ) ) );
        }

        // mime тип был обнулен, поправим его
        // а также проверим право пользователя
        if( $dosvg ){

            // разрешим
            if( current_user_can('manage_options') ){

                $data['ext']  = 'svg';
                $data['type'] = 'image/svg+xml';
            }
            // запретим
            else {
                $data['ext']  = false;
                $data['type'] = false;
            }

        }

        return $data;
    }

?>