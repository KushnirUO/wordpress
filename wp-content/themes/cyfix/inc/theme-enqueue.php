<?php
add_action('wp_enqueue_scripts', 'cyfix_scripts');

function cyfix_scripts()
{
    wp_enqueue_style('exotwo', get_template_directory_uri() . '/fonts/exotwo.css');
    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css');
    wp_enqueue_style('slick', get_template_directory_uri() . '/css/slick.css');
    wp_enqueue_style('fancyboxcss', get_template_directory_uri() . '/css/fancybox.css');
    wp_enqueue_style('critical', get_template_directory_uri() . '/css/critical.css');

    wp_enqueue_style('calccss', get_template_directory_uri() . '/css/calc.css');
    wp_enqueue_style('customcss', get_template_directory_uri() . '/css/custom.css');

    wp_enqueue_style('responsive', get_template_directory_uri() . '/css/responsive.css');

    wp_enqueue_style('jquery-ui-css', 'https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.14.0/themes/base/jquery-ui.min.css');

    wp_deregister_script('jquery');
    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-3.7.1.min.js');
    wp_enqueue_script('jquery');
    wp_enqueue_script('jquery-new', get_template_directory_uri() . '/js/jquery-3.7.1.min.js');

    wp_enqueue_script('jquery-ui', 'https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.14.0/jquery-ui.min.js');

    wp_enqueue_script('jquery-ui-touch-punch', 'https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js');

    wp_enqueue_script('slick', get_template_directory_uri() . '/js/slick.min.js');
    wp_enqueue_script('fancybox', get_template_directory_uri() . '/js/fancybox.min.js');

    wp_enqueue_script('calcjs', get_template_directory_uri() . '/js/calc.js');
    wp_enqueue_script('customjs', get_template_directory_uri() . '/js/custom.js');
}
