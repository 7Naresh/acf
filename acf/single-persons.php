<?php get_header(); ?>
<div class="container py-5">
    <div class="row">
        <div class="col-md-9 text-center px-3">
            <div class="row shadow-sm mr-1 py-3">
                <div class="col-md-4">
                <?php if(has_post_thumbnail()): ?>
                    <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>" class="img-thumbnail mb-1 person-img">
                    <?php endif; ?>
                    <h3 class="m-0"><?php the_title(); ?></h3>
                </div>
                <div class="col-md-8 text-justify">
                    <?php get_template_part('template-parts/content', 'person'); ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 shadow py-3">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>