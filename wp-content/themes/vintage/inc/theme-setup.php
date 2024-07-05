<?php

function vintage_setup() {
add_theme_support('menus');

register_nav_menus(
array(
'main_menu' =>__('Main menu'),
'second_menu' =>__('Second menu')
)
);
}

add_action( 'after_setup_theme', 'vintage_setup');
