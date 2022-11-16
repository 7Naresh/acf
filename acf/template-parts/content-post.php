<?php if(have_posts()): while(have_posts()): the_post(); ?>
<p><?php echo get_the_date('l jS F, Y'); ?></p>
<?php the_content(); ?>
<?php
$first_name = get_the_author_meta('first_name');
$last_name = get_the_author_meta('last_name');
?>
<p><em>Posted By: </em> <?php echo $first_name; ?> <?php echo $last_name; ?></p>
<?php
$tags = get_the_tags();
if($tags):
    foreach($tags as $tag):
?>
<a href="<?php echo get_tag_link($tag->term_id) ;?>" class="badge badge-danger p-2"><?php echo $tag->name ;?></a>
<?php endforeach; endif; ?>
<?php
$cats = get_the_category();
if($cats):
    foreach($cats as $cat):
?>
<a href="<?php echo get_tag_link($cat->term_id) ;?>" class="badge badge-info p-2"><?php echo $cat->name ;?></a>
<?php endforeach; endif; ?>
<?php 

// If comments are open or we have at least one comment, load up the comment template.
if ( comments_open() || get_comments_number() ) :
	comments_template();
endif;

?>
<?php endwhile; else: endif; ?>