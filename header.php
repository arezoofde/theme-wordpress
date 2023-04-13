<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>            
    <?php wp_head(); ?>
    <!--<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/fontawesome.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">-->
</head>

<body>
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="data">
                        <?php $header = get_theme_mod("header",false); ?>
                        <?php foreach($header as $headers): ?>
                          <?php if(array_key_exists('text',$headers) && !empty($headers['text'])) :?>
                        
                            <span><i class="<?php echo (isset($headers['icon']) && !empty($headers['icon']))? $headers['icon'] : null ?>"><?php echo $headers['text'] ?></i></span>
                            <?php endif;?>
                            <?php endforeach;?>
                             
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-sm-8 col-8">
                    <div class="menu-items">
                        <?php wp_nav_menu(array(
                            'theme_location'=>'Main_Menu',
                            'depth'=>'3',
                        )); ?>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-4 text-left">
                    <div class="logo-box">
                        <?php the_custom_logo(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>