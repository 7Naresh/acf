<?php get_header();
/**
 * Template Name: Content Field Template
 */
?>
<?php 
##### Content Fields #####

#Image Field
$image_field = get_field('image_field');
$image = $image_field['sizes']['medium']; // image sizes
$image_title = $image_field['title']; // image title
$image_alt = $image_field['alt']; // image alt
$image_caption = $image_field['caption']; // image caption
$image_description = $image_field['description']; // image description

#File Field
$pdf_file = get_field('pdf_file');

#Wysiwyg Editor Field
$text_editor = get_field('text_editor');

#oEmbed Field
$embed_field = get_field('embed_field');

#Gallery Field
$gallery = get_field('gallery');
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
            <!-- Image -->
            <?php if($image_field): ?>

                <!-- <pre>
                    <?php// echo var_dump($image_field); ?>
                </pre> -->

                <figure style="max-width: 300px;">
                <?php if ($image): ?>
                    <img src="<?php echo $image; ?>" 
                <?php endif; ?>
                <?php if ($image_alt): ?>
                    alt="<?php echo $image_alt; ?>"
                <?php endif; ?> 
                <?php if ($image_title): ?>
                    title="<?php echo $image_title; ?>" 
                <?php endif; ?>
                    class="img-thumbnail">
                    <?php if ($image_caption): ?>
                        <figcaption class="py-1 bg-light small"><?php echo $image_caption; ?></figcaption>
                    <?php endif; ?>
                    <?php if ($image_description): ?>
                        <p class="description py-1 bg-light shadow-sm"><?php echo $image_description; ?></p>
                    <?php endif; ?>
                </figure>

            <?php endif; ?>

            <!-- File -->
            <?php if($pdf_file): ?>
                <!-- <pre>
                    <?php// echo var_dump($pdf_file); ?>
                </pre> -->
                <a href="<?php echo $pdf_file['url']; ?>" target="_blank" class="badge badge-danger p-2"><?php echo $pdf_file['filename']; ?></a>
            <?php endif; ?>

            <!-- Wysiwyg Editor -->
            <?php if($text_editor): ?>
                <?php echo $text_editor; ?>
            <?php endif; ?>

            <!-- oEmbed Field -->
            <?php if($embed_field): ?>
                <?php echo $embed_field; ?>
            <?php endif; ?>

            <!-- Gallery Field -->
            <?php if($gallery): ?>
                <!-- <pre>
                    <?php// echo var_dump($gallery); ?>
                </pre> -->
                <div class="row mt-5">
                    <?php foreach($gallery as $gallery_imgs): ?>
                        <div class="col-md-4 mb-3">
                            <a href="<?php echo $gallery_imgs['sizes']['large']; ?>" class="image-link">
                                <img src="<?php echo $gallery_imgs['sizes']['medium']; ?>" class="img-thumbnail">
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            
        </div>
    </div>
</div>

<?php get_footer();?>