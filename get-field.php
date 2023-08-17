<?php

    $front_id = get_option('page_on_front');
    $fieldNum = get_field( 'phone-number', $front_id);
    $fieldValid = get_field('phone-link', $front_id);
    $fieldMail = get_field('mail', $front_id);
    $fieldLocation = get_field('location', $front_id);
    $locationLink = get_field('location-link', $front_id);
    $dzenLink = get_field('dzen-link', $front_id);
    $telegramLink = get_field('telegram-link', $front_id);
    $profileLink = get_field('profile-link', $front_id);
    $profileCreator = get_field('profile-creator-text', $front_id);
    $ipInfo = get_field('ip', $front_id);
    $innInfo = get_field('inn', $front_id);

?>