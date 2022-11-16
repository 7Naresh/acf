<?php get_header();
/**
 * Template Name: Jquery Field Template
 */
?>
<?php 
##### Jquery Fields #####

#Google Map Field
$google_map = get_field('google_map');

#Date Picker Field
$date_picker = get_field('date_picker');

#Date Time Picker Field
$date_time_picker = get_field('date_time_picker');

#Time Picker Field
$time_picker = get_field('time_picker');

#Color Picker Field
$color_picker = get_field('color_picker');
?>

<div class="container py-5">
    <div class="row">
        <div class="col">
            <h1 class="text-center py-3 mb-3 bg-light border-bottom border-dark"><?php the_title(); ?></h1>
        </div>
    </div>
    <!-- for page content -->
    <div class="row">
        <div class="col-md-12">
            <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <?php the_content(); ?>
            <?php endwhile; else: endif; ?>
        </div>
    </div>
    <!-- acf fields -->
    <div class="row">
        <div class="col-md-12">

            <!-- Google Map -->
            <?php if($google_map): ?>
                <?php echo var_dump($google_map); ?>
            <?php endif; ?>

            <!-- Date Picker -->
            <p class="py-2 pl-2 mb-3 bg-light">
                <?php if($date_picker): ?>
                    <?php echo $date_picker; ?>
                <?php endif; ?>
            </p>

            <!-- Date Time Picker -->
            <p class="py-2 pl-2 mb-3 bg-light">
                <?php if($date_time_picker): ?>
                    <?php echo $date_time_picker; ?>
                <?php endif; ?>
            </p>

            <!-- Time Picker -->
            <p class="py-2 pl-2 mb-3 bg-light">
                <?php if($time_picker): ?>
                    <?php echo $time_picker; ?>
                <?php endif; ?>
            </p>

            <!--Color Picker -->
            <p class="py-2 pl-2 mb-3 bg-light">
                <?php if($color_picker): ?>
                    <?php echo $color_picker; ?>
                <?php endif; ?>
            </p>

        </div>
    </div>
</div>

<?php get_footer();?>