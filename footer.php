<div class="footer-box">
    <div class="container">
        <div class="row">

            <div class="col-md-2 col-sm-4">
                <div class="footer-menu">
                    <span class="title">دسترسی سریع</span>
                   
                    <?php wp_nav_menu(array(
                            'theme_location'=>'Footer_one',
                            'depth'=>'1',
                        )); ?>
                </div>
            </div>
            <div class="col-md-2 col-sm-4">
                <div class="footer-menu">
                    <span class="title">دسترسی موضوعی</span>
                  
                    <?php wp_nav_menu(array(
                            'theme_location'=>'Footer_two',
                            'depth'=>'1',
                        )); ?>
                </div>
            </div>
            <div class="col-md-2 col-sm-4">
                <div class="footer-menu">
                    <span class="title">دسترسی موضوعی</span>
                 
                    <?php wp_nav_menu(array(
                            'theme_location'=>'Footer_three',
                            'depth'=>'1',
                        )); ?>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">            
                    <?php if(is_active_sidebar("fdesc")){
                        dynamic_sidebar("fdesc");
                    } ?>
                    <div class="footer_social">
                    <?php wp_nav_menu(array(
                            'theme_location'=>'Footer_social',
                            'depth'=>'1',
                        )); ?>
                    </div>
            </div>
        </div>
    </div>
</div>
