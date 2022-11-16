<?php get_header(); ?>

<?php 
##### ACF Fields #####

## Two Way Relationship Field

# This will display on the custom Post Type Monuments.

?>

<div class="container py-5">
    <div class="row">
        <div class="col-md-9">
            <h1 class="text-center mb-4"><?php the_title(); ?></h1>

            <?php if(has_post_thumbnail()): ?>
            <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>" class="img-fluid">
            <!-- <img src="<?php// the_post_thumbnail('small-size'); ?>"> -->
            <?php endif; ?>
            <h1 class="my-3"><?php the_title(); ?></h1>
            <?php get_template_part('template-parts/content', 'post', get_post_format()); ?>

            <!-- two way realtionship -->
            <?php 
            
            $args = [
                'post_type' => 'locations',
                'meta_query' => [
                    'key' => 'monuments', // name of custom field
                    'value' => '"' . get_the_ID() . '"', // match the exact ID
                    'compare' => 'LIKE'
                ]
            ];
            
            $locations = get_posts($args);
            
            ?>

            <?php foreach($locations as $location): ?>
                <a href="<?php echo get_permalink($location->ID); ?>" class="btn btn-lg btn-success rounded-0">
                    <?php echo $location->post_title; ?>
                </a>
            <?php endforeach; ?>

            <!-- <pre>
                <?php// echo print_r($locations) ;?>
            </pre> -->
                
        </div>

        <div class="col-md-3 shadow py-3">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>