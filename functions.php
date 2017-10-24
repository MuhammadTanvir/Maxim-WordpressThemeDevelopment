<?php

function theme_supports(){
    
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    
    
    register_nav_menus(array(
        'main_menu' => 'Main Menu',
    ));
}


require_once('inc/theme_scripts.php');

require_once('inc/theme_custom_post.php');

require_once('inc/theme_cmb2.php');

require_once('inc/redux-framework/redux-framework.php');

require_once('inc/theme_option.php');
