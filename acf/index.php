<?php get_header(); ?>
<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <h1 class="mb-3 text-uppercase text-center"><?php single_post_title() ?></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-9 post_container">
            <?php get_template_part('template-parts/content', 'archive', get_post_format()); ?>
        </div>
        <div class="col-md-3 shadow py-3">
            <?php get_sidebar(); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 pt-4">
            <button type="button" class="btn btn-dark text-white rounded-0"><?php previous_post_link(); ?></button>
            <button type="button" class="btn btn-dark text-white rounded-0"><?php next_post_link(); ?></button>
        </div>
    </div>
</div>
<?php get_footer(); ?>