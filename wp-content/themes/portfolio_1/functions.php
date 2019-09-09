<?php 
add_theme_support('title-tag');

function menu(){
    register_nav_menu('main_menu', 'Menu principal');
}
add_action('init', 'menu');
