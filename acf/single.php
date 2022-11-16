<?php get_header(); ?>
<div class="container py-5">
    <div class="row">
        <div class="col-md-9">
            <?php if(has_post_thumbnail()): ?>
            <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>" class="img-fluid">
            <!-- <img src="<?php// the_post_thumbnail('small-size'); ?>"> -->
            <?php endif; ?>
            <h1 class="my-3"><?php the_title(); ?></h1>
            <?php get_template_part('template-parts/content', 'post', get_post_format()); ?>
        </div>
        <div class="col-md-3 shadow py-3">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>