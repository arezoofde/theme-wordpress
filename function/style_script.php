<?php 
function theme_css_js(){

wp_enqueue_style ('bootstrap', get_template_directory_uri().'/css/bootstrap.css',[],'1.0.1');
wp_enqueue_style('font-awesome', get_template_directory_uri().'/css/fontawesome.css',[],'1.0.3');
wp_enqueue_style('style', get_template_directory_uri().'/style.css',[],'1.0.16');
wp_enqueue_script('myjs', get_template_directory_uri().'/js/bootstrap.js',['jquery'],'1.0.0',true);
}
   add_action("wp_enqueue_scripts","theme_css_js");

   ?>