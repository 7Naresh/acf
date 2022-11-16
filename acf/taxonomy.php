<?php
/**
 * Locations taxonomy archive
 */
get_header();
$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
?>

<div class="container py-5">
    <div class="row">
        <div class="col-md-9">
            <h1 class="text-center text-capitalize mb-5"><?php echo $term->name; ?> monuments</h1>
        <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
            <div class="card mb-3 shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <h4 class="card-title display-4"><?php the_title(); ?></h4>
                        <?php if(has_post_thumbnail()): ?>
                            <img src="<?php the_post_thumbnail_url('thumbnail') ?>">
                        <?php endif; ?>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <a href="<?php the_permalink(); ?>" class="btn btn-success">See More</a>
                </div>
            </div>
            <?php endwhile; endif; ?>
        </div>
        <div class="col-md-3">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>