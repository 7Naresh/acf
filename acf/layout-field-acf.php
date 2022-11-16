<?php get_header();
/**
 * Template Name: Layout Fields Template
 */
?>
<?php 
##### Layout Fields #####
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

            <!-- Group -->
            <?php if(have_rows('profile_card')): ?>

                <?php while(have_rows('profile_card')): the_row(); ?>

                    <?php
                        $image = get_sub_field('image');
                        $name = get_sub_field('name');
                        $link = get_sub_field('link');
                    ?>

                    <!-- <pre>
                        <?php// echo print_r($image) ?>
                    </pre> -->

                    <div class="card text-center shadow-sm" style="max-width: 300px;">
                        <a href="<?php echo $link['url'] ;?>" target="<?php echo $link['target'] ;?>">
                            <div class="card-body">
                                <img src="<?php echo $image['sizes']['medium'] ;?>" alt="<?php echo $image['alt'] ;?>" 
                                style="border: 5px solid #cecece">
                                <h4 class="text-dark mt-3 mb-0"><?php echo $name ;?></h4>
                            </div>
                        </a>
                    </div>

                <?php endwhile; ?>

            <?php endif; ?>

            <!-- Repeater -->
            <?php if(have_rows('profile_cards')): ?>

                <div class="row my-5">
                    
                    <?php while(have_rows('profile_cards')): the_row(); ?>

                        <?php 
                            $image = get_sub_field('image');
                            $name = get_sub_field('name');
                            $link = get_sub_field('link');
                        ?>
                        
                        <div class="col-md-4">
                            <div class="card text-center shadow-sm">

                                <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>">
                                    <div class="card-body">
                                        <img src="<?php echo $image['sizes']['medium'] ;?>" alt="<?php echo $image['alt'] ;?>" 
                                        style="border: 5px solid #cecece">
                                        <h4 class="text-dark mt-3 mb-0"><?php echo $name ;?></h4>
                                    </div>
                                </a>

                            </div>

                        </div>

                    <?php endwhile; ?>

                </div>

            <?php endif; ?>

            <!-- Flexible Content -->
            <?php if(have_rows('flexible_content')): ?>

                <?php while(have_rows('flexible_content')): the_row(); ?>

                    <!-- text layout -->
                    <?php if(get_row_layout() == 'text_layout'): ?>

                        <!-- <pre>
                            <?php// echo print_r(get_sub_field('content_column')) ;?>
                        </pre> -->

                        <?php $columns = get_sub_field('content_column'); ?>

                        <div class="row">

                            <?php foreach($columns as $column): ?>

                                <div class="col-md-4 p-2">
                                    <div class="card">
                                        <div class="card-body text-justify">
                                            <h3><?php echo $column['column_title'] ;?></h3>
                                            <?php echo $column['column_text'] ;?>
                                        </div>
                                    </div>
                                </div>

                            <?php endforeach; ?>

                        </div>

                    <?php endif; ?>

                    <!-- Image Layout -->
                    <?php if(get_row_layout() == 'image_layout'): ?>

                        <?php 
                            $image = get_sub_field('image');
                            $text_content = get_sub_field('text_content');
                            $image_side = get_sub_field('image_side');
                        ?>

                        <div class="row mt-5">
                            <!-- if image side is left -->
                            <?php if($image_side == 'left'): ?>

                                <div class="col-md-6">
                                    <img src="<?php echo $image['sizes']['large'] ;?>" class="img-fluid">
                                </div>
                                <div class="col-md-6">
                                    <?php echo $text_content ;?>
                                </div>

                            <?php endif; ?>
                            <!-- if image side is right -->
                            <?php if($image_side == 'right'): ?>

                                <div class="col-md-6">
                                    <?php echo $text_content ;?>
                                </div>

                                <div class="col-md-6">
                                    <img src="<?php echo $image['sizes']['large'] ;?>" class="img-fluid">
                                </div>

                             <?php endif; ?>
                        </div>

                    <?php endif; ?>

                <?php endwhile; ?>

            <?php endif; ?>

        </div>
    </div>
</div>

<?php get_footer();?>