<?php
function theme_widgets(){
    register_sidebar(array(
       "id"=> "fdesc",
       "name"=>"ابزارک فوتر",
       "discription"=>"ابزارک برای توضیحات",
       "before_widget"=>"<div class='side-bx'>",
       "after_widget"=>"</div>",
       "before_title"=>" <span class='title'>",
       "after_title"=>"</span>"
    ));
    register_sidebar(array(
       "id"=> "latest_posts_wig",
       "name"=>"ابزارک نمایش آخرین مطالب",
       "discription"=>"نمایش آخرین مطالب سایت در صفحه جزییات مطلب",
       "before_widget"=>"<div class='side-bx'>",
       "after_widget"=>"</div>",
       "before_title"=>" <span class='title'>",
       "after_title"=>"</span>"
    ));
    register_sidebar(array(
       "id"=> "cats_wig",
       "name"=>"ابزارک نمایش دسته بندی ها",
       "discription"=>"نمایش آخرین مطالب سایت در صفحه جزییات مطلب",
       "before_widget"=>"<div class='side-bx'>",
       "after_widget"=>"</div>",
       "before_title"=>" <span class='title'>",
       "after_title"=>"</span>"
    ));
    }
    
    add_action('widgets_init','theme_widgets');
    
?>    