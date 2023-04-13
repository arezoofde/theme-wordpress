<div class="site-boxes-content">
    <div class="container">
        <div class="col-md-12 ">
            <div class="row">
                <?php
      $wordpress_posts = new WP_Query(array(
        'post_type' => 'post',
        'post_per_page' => '3',
         'post_status' =>'publish',
         'category_name'=>'wordpress'
      ));
if($wordpress_posts-> have_posts()){?>
                <div class="col-md-6 ">
                    <div class="box">
                        <span class="title">آموزش های ما</span>
                        <?php while ($wordpress_posts-> have_posts()){ $wordpress_posts->the_post(); ?>
                        <div class="post-item-bx">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-4">
                                        <div class="pic">
                                            <?php if(has_post_thumbnail()){ ?>
                                            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title();?>" />
                                            <?php } ?>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-8 col-8">
                                        <div class="desc">
                                            <a href="<?php the_permalink(); ?>"><h5> <?php the_title(); ?></h5></a>
                                            <p><?php echo get_the_excerpt(); ?> </p>
                                            <span><i class="fa fa-calendar-o"></i><?php echo get_the_date(); ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <?php } wp_reset_postdata();?>
                    </div>
                </div>
                <?php } ?>
                <?php $wordpress_posts = new WP_Query(array(
        'post_type' => 'post',
        'post_per_page' => '3',
        'post_status' =>'publish',
        'category_name'=>'wordpress'
      ));
if($wordpress_posts-> have_posts()){?>
                <div class="col-md-6">
                    <div class="box">
                        <span class="title">مطالب پر بازدید</span>
                        <?php while ($wordpress_posts-> have_posts()){ $wordpress_posts->the_post(); ?>
                        <div class="post-item-bx">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-4">
                                        <div class="pic">
                                            <?php if(has_post_thumbnail()){ ?>
                                            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title();?>" />
                                            <?php } ?>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-8 col-8">
                                        <div class="desc">
                                        <a href="<?php the_permalink(); ?>"><h5> <?php the_title(); ?></h5></a>
                                            <p><?php echo get_the_excerpt(); ?> </p>
                                            <span><i class="fa fa-calendar-o"></i><?php echo get_the_date(); ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <?php } wp_reset_postdata();?>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
