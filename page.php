<?php get_header();?>
<?php get_template_part("include/page","banner"); ?>

<div class="container">

    <div class="page-content single-centent">
        <div class="row">
            <?php while(have_posts()){ the_post(); ?>
            <div class="col-md-8">
                <div class="content-bx">
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
                    <div class="meta">
                        <span><i class="fa-clock"></i><?php echo get_the_date(); ?></span>
                        <span><i class="fa-comment"></i><?php echo get_comments_number(); ?>نظر</span>


                    </div>
                    <h1> <?php the_title(); ?></h1>
                    <hr>
                    <div class="p-text">
                        <?php the_content(); ?>
                    </div>
                    
                    <div class="comment_box">
                            <?php comments_template(); ?>
                    </div>
                </div>
            </div>

            <?php } ?>
            <?php get_sidebar(); ?>
        </div>
    </div>
    </div>
<?php get_footer(); ?>
