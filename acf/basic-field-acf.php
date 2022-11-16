<?php get_header();
/**
 * Template Name: Basic Field Template
 */
?>
<?php 
##### Basic Fields #####

#Text Field
$enter_name = get_field('enter_name');

#Text Area Field
$enter_message = get_field('enter_message');

#Number Field
$enter_number = get_field('enter_number');

#Range Field
$choose_range = get_field('choose_range');

#Email Field
$enter_email = get_field('enter_email');

#Url Field
$enter_url = get_field('enter_url');

#Password Field
$enter_password = get_field('enter_password');
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

            <!-- Text -->
            <p class="py-2 pl-2 mb-3 bg-light">
                <?php if($enter_name): ?>
                    <?php echo $enter_name; ?>
                <?php endif; ?>
            </p>

            <!-- Text Area -->
            <p class="py-2 pl-2 mb-3 bg-light">
                <?php if($enter_message): ?>
                    <?php echo $enter_message; ?>
                <?php endif; ?>
            </p>

            <!-- Number -->
            <p class="py-2 pl-2 mb-3 bg-light">
                <?php if($enter_number): ?>
                    <?php echo $enter_number; ?>
                <?php endif; ?>
            </p>

            <!-- Range -->
            <p class="py-2 pl-2 mb-3 bg-light">
                <?php if($choose_range): ?>
                    <?php echo $choose_range; ?>
                <?php endif; ?>
            </p>

            <!-- Email -->
            <p class="py-2 pl-2 mb-3 bg-light">
                <?php if($enter_email): ?>
                    <a href="mailto:<?php echo $enter_email; ?>" target="_blank"><?php echo $enter_email; ?></a>
                <?php endif; ?>
            </p>

            <!-- Url -->
            <p class="py-2 pl-2 mb-3 bg-light">
                <?php if($enter_url): ?>
                    <a href="<?php echo $enter_url; ?>" target="_blank">Click Me</a>
                <?php endif; ?>
            </p>
            
            <!-- Password -->
            <p class="py-2 pl-2 mb-3 bg-light">
                <?php if($enter_password): ?>
                    <?php echo $enter_password; ?>
                <?php endif; ?>
            </p>

        </div>
    </div>
</div>

<?php get_footer();?>