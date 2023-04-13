<?php
function wpshow_setting($wp_customize){
    $wp_customize->add_panel(
        "wpshow_setting",
        [
            "title"=>"تنظیمات قالب پنل",
            "description"=>"در این قسمت می توانید تنظیمات هدر را انجام دهید.",
            "priority"=>101,
            "description_hidden"=>false,
        ]
    );
    $wp_customize->add_section(
        "header_section",
        [
            "title"=>"تنظیمات هدر",
            "description"=>"در این قسمت می توانید تنظیمات هدر را انجام دهید.",
            "panel"=>"wpshow_setting",
            "priority"=>101,
            "description_hidden"=>true,
        ]
    );
    
    for($i = 0 ; $i < 2 ; $i++){
    $wp_customize->add_setting(
        "header[{$i}][icon]", // آیدی تنظیمات که قرار است با این اسم در دیتا بیس ذخیره شود
        array(
            'default' => '',
            'transport' => 'refresh',
            'sanitize_callback' => ''
        )
    );

    $wp_customize->add_control(
        "header[{$i}][icon]", // آیدی تنظیماتی که این کنترل به آن اتصال دارد
        array(
            'label' => __('آیکون'),
            'section' => 'header_section', // ایدی سکشنی که میخواهیم این کنترل در آن نمایش داده شود
            'priority' => 1,
            'type' => 'text',
            'input_attrs' => array( // گزینه های سفارشی.
                'style' => 'border: 1px solid #999',
                'placeholder' => __('لطفا آیکون خود را وارد کنید...'),
            ),
        )
    );
  

    $wp_customize->add_setting(
       "header[{$i}][text]", // آیدی تنظیمات که قرار است با این اسم در دیتا بیس ذخیره شود
        array(
            'default' => '',
            'transport' => 'refresh',
            'sanitize_callback' => ''
        )
    );

    $wp_customize->add_control(
       "header[{$i}][text]", // آیدی تنظیماتی که این کنترل به آن اتصال دارد
        array(
            'label' => __('متن'),
            'section' => 'header_section', // ایدی سکشنی که میخواهیم این کنترل در آن نمایش داده شود
            'priority' => 1,
            'type' => 'text',
            'input_attrs' => array( // گزینه های سفارشی.
                'style' => 'border: 1px solid #999',
                'placeholder' => __('لطفا متن خود را وارد کنید...'),
            ),
        )
    );
   
    
}
$wp_customize->add_section(
    "services_section",
    [
        "title"=>"خدمات",
        "description"=>"در این قسمت می توانید تنظیمات هدر را انجام دهید.",
        "panel"=>"wpshow_setting",
        "priority"=>101,
        "description_hidden"=>true,
    ]
);
for($i = 0 ; $i < 4  ; $i++){
    $wp_customize->add_setting(
        "services[{$i}][image]", // آیدی تنظیمات که قرار است با این اسم در دیتا بیس ذخیره شود
        array(
            'default' => '',
            'transport' => 'refresh',
            'sanitize_callback' => ''
        )
    );

   

 $wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    "services[{$i}][image]", // آیدی تنظیماتی که این کنترل به آن اتصال دارد
    array(
        'label' => __('تصویر'),
        'section' => 'services_section', // ایدی سکشنی که میخواهیم این کنترل در آن نمایش داده شود
        'priority' => 1,
        'button_labels' => array( // گزینه های شخصی سازی دکمه .
            'select' => __('انتخاب تصویر'),
            'change' => __('تغییر تصویر'),
            'remove' => __('حذف'),
            'default' => __('پیش فرض'),
            'placeholder' => __('تصویری انتخاب نشده است'),
            'frame_title' => __('انتخاب تصویر'),
            'frame_button' => __('انتخاب تصویر'),
        )
    )
));
  

    $wp_customize->add_setting(
       "services[{$i}][title]", // آیدی تنظیمات که قرار است با این اسم در دیتا بیس ذخیره شود
        array(
            'default' => '',
            'transport' => 'refresh',
            'sanitize_callback' => ''
        )
    );

    $wp_customize->add_control(
       "services[{$i}][title]", // آیدی تنظیماتی که این کنترل به آن اتصال دارد
        array(
            'label' => __('تیتر'),
            'section' => 'services_section', // ایدی سکشنی که میخواهیم این کنترل در آن نمایش داده شود
            'priority' => 1,
            'type' => 'text',
            'input_attrs' => array( // گزینه های سفارشی.
                'style' => 'border: 1px solid #999',
                'placeholder' => __('لطفا متن خود را وارد کنید...'),
            ),
        )
    );
    
    $wp_customize->add_setting(
        "services[{$i}][desc]", // آیدی تنظیمات که قرار است با این اسم در دیتا بیس ذخیره شود
         array(
             'default' => '',
             'transport' => 'refresh',
             'sanitize_callback' => ''
         )
     );
 
     $wp_customize->add_control(
        "services[{$i}][desc]", // آیدی تنظیماتی که این کنترل به آن اتصال دارد
         array(
             'label' => __('توضیحات'),
             'section' => 'services_section', // ایدی سکشنی که میخواهیم این کنترل در آن نمایش داده شود
             'priority' => 1,
             'type' => 'textarea',
             'input_attrs' => array( // گزینه های سفارشی.
                 'style' => 'border: 1px solid #999',
                 'placeholder' => __('لطفا توضیحات خود را وارد کنید...'),
             ),
         )
     );
   
    
}
}
add_action("customize_register","wpshow_setting");