<?php 
$cat= wp_get_post_categories(get_the_ID(),array('fields' => 'ids'));

    $releated_posts = new Wp_Query(array(
        'posts_type'=> 'post',
        'posts_per_page' =>'3',
        'post_status'=>'publish',
        'categorie__in'=>$cat,
        'post__not_in' =>array($post->ID),
        'orderby' => 'rand'
    ));
    if($releated_posts -> have_posts()){
?>

<div class="releated_posts">
    <span class="releated_posts_span"> مطالب مرتبط </span>
    <?php while ($releated_posts -> have_posts()) { $releated_posts->the_post(); ?>
      <a href='<?php the_permalink(); ?>'><p><i class='fa fa-angle-left'></i><?php the_title(); ?></p></a>
        <?php }?>
</div>

<?php } ?>