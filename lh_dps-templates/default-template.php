<?php if ($display_posts){ ?>


<ul class="lh_dps-post_list">
<?php
global $post;
foreach ($display_posts as $post){
setup_postdata($post);
?>
<li>
<h4><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
    <?php the_title(); ?></a></h4>

</li>
<?php
}
?></ul>
<?php wp_reset_postdata(); } ?>