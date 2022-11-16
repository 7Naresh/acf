<?php get_header();
/**
 * Template Name: Choice Field Template
 */
?>
<?php 
##### Choice Fields #####

#Select Field
$colors = get_field('select_colors');

#Checkbox Field
$languages = get_field('select_languages');

#Radio Button Field
$genders = get_field('select_gender');

#Button Group Field
$button_group = get_field('button_group');

#True / False Field
$style_box = get_field('style_box');
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
            <!-- Select -->
            <p class="py-2 pl-2 mb-3 bg-light">
                <?php if($colors): ?>

                    <!-- <pre>
                        <?php //echo var_dump($colors); ?>
                    </pre> -->

                    <!-- for return format array and for multiple values -->
                    <?php foreach($colors as $color): ?>
                        <?php echo $color['value']; ?>
                    <?php endforeach; ?>

                    <!-- for return format value -->
                    <?php// echo implode(", ", $colors); ?>

                <?php endif; ?>
            </p>

            <!-- Checkbox -->
            <p class="py-2 pl-2 mb-3 bg-light">

                <?php if($languages): ?>
                    <!-- <pre>
                            <?php// echo var_dump($languages); ?>
                        </pre> -->

                    <!-- for return format array and for multiple values -->
                    <?php foreach($languages as $lang): ?>
                        <?php echo $lang['label']; ?>
                    <?php endforeach; ?>

                    <!-- for return format value -->
                    <?php// foreach($languages as $lang): ?>
                        <?php// echo $lang; ?>
                    <?php// endforeach; ?>

                <?php endif; ?>
            </p>

            <!-- Radio Button -->
            <p class="py-2 pl-2 mb-3 bg-light">
                <?php if($genders): ?>

                    <!-- <pre>
                        <?php// echo var_dump($genders); ?>
                    </pre> -->

                    <!-- for return format array and for multiple values -->
                    <?php echo $genders['label']; ?>

                    <!-- for return format value -->
                    <?php// echo $genders; ?>

                <?php endif; ?>
            </p>

            <!-- Button Group -->
                <?php if($button_group): ?>

                    <?php if($button_group === "left"): ?>
                        <div class="border border-dark bg-light shadow-sm p-3 mb-3" style="text-align:<?php echo $button_group; ?>">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem hic ex non distinctio nihil! Iusto tempore quam unde veniam impedit explicabo, sequi ut ipsum tempora ullam blanditiis neque nulla eaque, fuga eos sed, numquam molestias aspernatur magni reprehenderit. Cupiditate maiores cumque illum dolorem quos dicta? Assumenda, cupiditate. Id nam tempore itaque, expedita est facilis assumenda quae similique earum praesentium enim ratione ex quod ipsam quas ullam cumque beatae? Exercitationem facilis voluptates illum sapiente ipsum accusantium non architecto vitae reiciendis ipsam delectus, eius eum magnam officiis maxime velit harum! Fugiat, blanditiis. Qui rem inventore est repellendus dolor incidunt deserunt culpa quas?
                        </div>
                    <?php endif; ?>
                    <?php if($button_group === "center"): ?>
                        <div class="border border-dark bg-light shadow-sm p-3 mb-3" style="text-align:<?php echo $button_group; ?>">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem hic ex non distinctio nihil! Iusto tempore quam unde veniam impedit explicabo, sequi ut ipsum tempora ullam blanditiis neque nulla eaque, fuga eos sed, numquam molestias aspernatur magni reprehenderit. Cupiditate maiores cumque illum dolorem quos dicta? Assumenda, cupiditate. Id nam tempore itaque, expedita est facilis assumenda quae similique earum praesentium enim ratione ex quod ipsam quas ullam cumque beatae? Exercitationem facilis voluptates illum sapiente ipsum accusantium non architecto vitae reiciendis ipsam delectus, eius eum magnam officiis maxime velit harum! Fugiat, blanditiis. Qui rem inventore est repellendus dolor incidunt deserunt culpa quas?
                        </div>
                    <?php endif; ?>
                    <?php if($button_group === "right"): ?>
                        <div class="border border-dark bg-light shadow-sm p-3 mb-3" style="text-align:<?php echo $button_group; ?>">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem hic ex non distinctio nihil! Iusto tempore quam unde veniam impedit explicabo, sequi ut ipsum tempora ullam blanditiis neque nulla eaque, fuga eos sed, numquam molestias aspernatur magni reprehenderit. Cupiditate maiores cumque illum dolorem quos dicta? Assumenda, cupiditate. Id nam tempore itaque, expedita est facilis assumenda quae similique earum praesentium enim ratione ex quod ipsam quas ullam cumque beatae? Exercitationem facilis voluptates illum sapiente ipsum accusantium non architecto vitae reiciendis ipsam delectus, eius eum magnam officiis maxime velit harum! Fugiat, blanditiis. Qui rem inventore est repellendus dolor incidunt deserunt culpa quas?
                        </div>
                    <?php endif; ?>
                    <?php if($button_group === "justify"): ?>
                        <div class="border border-dark bg-light shadow-sm p-3 mb-3" style="text-align:<?php echo $button_group; ?>">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem hic ex non distinctio nihil! Iusto tempore quam unde veniam impedit explicabo, sequi ut ipsum tempora ullam blanditiis neque nulla eaque, fuga eos sed, numquam molestias aspernatur magni reprehenderit. Cupiditate maiores cumque illum dolorem quos dicta? Assumenda, cupiditate. Id nam tempore itaque, expedita est facilis assumenda quae similique earum praesentium enim ratione ex quod ipsam quas ullam cumque beatae? Exercitationem facilis voluptates illum sapiente ipsum accusantium non architecto vitae reiciendis ipsam delectus, eius eum magnam officiis maxime velit harum! Fugiat, blanditiis. Qui rem inventore est repellendus dolor incidunt deserunt culpa quas?
                        </div>
                    <?php endif; ?>

                <?php endif; ?>

                <!-- True / False -->
                <?php if($style_box): ?>
                    <ul class="list-group">
                        <li class="list-group-item bg-light">Item 1</li>
                        <li class="list-group-item bg-light">Item 2</li>
                        <li class="list-group-item bg-light">Item 3</li>
                        <li class="list-group-item bg-light">Item 4</li>
                        <li class="list-group-item bg-light">Item 5</li>
                    </ul>
                <?php else: ?>
                        <ul>
                            <li>Item 1</li>
                            <li>Item 2</li>
                            <li>Item 3</li>
                            <li>Item 4</li>
                            <li>Item 5</li>
                        </ul>
                <?php endif; ?>
                
        </div>
    </div>
</div>

<?php get_footer();?>