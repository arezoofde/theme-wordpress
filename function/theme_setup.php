<?php
function theme_setup(){
    add_theme_support('title-tag');
    add_theme_support('widgets');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    register_nav_menus(array(
    'Main_Menu'=>'منوی اصلی',
    'Footer_one'=>'منوی اول فوتر',
    'Footer_two'=>'منوی دوم فوتر',
    'Footer_three'=>'منوی سوم فوتر',
    'Footer_social'=>'منوی شبکه های اجتماعی',
    ));
 }
       add_action("after_setup_theme","theme_setup");
 
?> 
