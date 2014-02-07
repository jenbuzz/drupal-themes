<?php

function d7_boilerplate_preprocess_html(&$variables)
{
    $meta_viewport = array(
        '#type' => 'html_tag',
        '#tag' => 'meta',
        '#attributes' => array(
            'content' => 'width=device-width',
            'name' => 'viewport',
        )
    );
    drupal_add_html_head($meta_viewport, 'meta_viewport');

    //drupal_add_css(path_to_theme().'/css/style.css');
    //drupal_add_js(path_to_theme().'/js/script.js');
}

