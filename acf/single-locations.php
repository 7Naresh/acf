<?php get_header(); ?>

<?php 
##### ACF Fields #####

## Relationship Field

$monuments = get_field('monuments');

# This will display on the custom Post Type Location.

?>

<div class="container py-5">
    <div class="row">
        <div class="col-md-9">
            <h1 class="text-center mb-4"><?php the_title(); ?></h1>

                <!-- <pre>
                    <?php// echo var_dump($monuments); ?>
                </pre> -->

                <?php foreach($monuments as $monument): ?>

                <?php// foreach($monuments as $post): ?>
                <?php// setup_postdata($post); ?>

                    <a href="<?php echo get_permalink($monument->ID); ?>">

                        <div class="card mb-3 d-flex align-items-center flex-row-reverse shadow-sm p-2 bg-info momt-card">

                            <img src="<?php echo get_the_post_thumbnail_url($monument->ID, 'thumbnail'); ;?>">

                            <div class="card-body">
                                
                                <h4 class="card-title text-white display-4"><?php echo $monument->post_title; ?></h4>
                                
                                <!-- <p class="card-text"><?php// the_excerpt(); ?></p> -->
                            </div>

                        </div>
                    </a>

                <?php endforeach; ?>
                <?php// wp_reset_postdata(); ?>
        </div>


        <div class="col-md-3 shadow py-3">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>