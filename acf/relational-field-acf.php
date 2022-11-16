<?php get_header();
/**
 * Template Name: Relational Field Template
 */
?>
<?php 
##### Relational Fields #####

#Link Field
$link = get_field('link');

#Post Object Field
$featured_post = get_field('post_object');

#Page Link Field
$page_links = get_field('page_links');

#Taxonomy Field
$taxonomy = get_field('taxonomy');

#User Field
$user = get_field('user');
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

            <!-- Link -->
            <?php if($link): ?>
                <!-- <pre>
                    <?php// echo var_dump($link); ?>
                </pre> -->
            <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"
                title="<?php echo $link['title']; ?>">Click to go on <?php echo $link['title']; ?> page.</a>
            <?php endif; ?>

            <!-- Post Object -->
            <?php if($featured_post): ?>
                <!-- <pre>
                    <?php// echo var_dump($featured_post); ?>
                </pre> -->

                <ul class="list-group my-3">

                    <?php foreach($featured_post as $post): ?>
                        
                        <?php setup_postdata($post); ?>
                        <li class="list-group-item bg-transparent">
                            <a href="<?php the_permalink(); ?>">
                                <div class="card">
                                    <div class="card-body d-flex align-items-center justify-content-between">
                                        <h3 class="text-dark"><?php echo $post->post_title; ?></h3>
                                        <?php if(has_post_thumbnail()): ?>
                                            <?php the_post_thumbnail('thumbnail'); ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </a>
                        </li>
                        
                        
                    <?php endforeach; ?>

                </ul>
                
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>

            <!-- Page Link -->
            <?php if($page_links): ?>

                <!-- single value -->
                <!-- <a href="<?php// echo $page_links; ?>" target="_blank">Page Link</a> -->

                <!-- multiple values -->
                <!-- <pre>
                    <?php// echo var_dump($page_links); ?>
                </pre> -->

                <ul class="list-group mb-3">
                    <?php foreach($page_links as $page_link): ?>
                        <li class="list-group-item">
                            <a href="<?php echo esc_url($page_link); ?>" target="_blank"><?php echo esc_html($page_link); ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>

            <?php endif; ?>

            <!-- Taxonomy -->
            <?php if($taxonomy):?>
                <!-- <pre>
                    <?php// echo var_dump($taxonomy); ?>
                </pre> -->
                <?php foreach($taxonomy as $term): ?>

                    <a href="<?php echo get_term_link($term); ?>" class="badge badge-danger p-3 rounded-0">
                        <?php echo $term->name; ?>
                    </a>

                <?php endforeach; ?>

            <?php endif; ?>

            <!-- User -->
            <?php if($user): ?>
                <!-- <pre>
                    <?php// echo var_dump($user); ?>
                </pre> -->
                <!-- single user -->
                <div class="card w-25 bg-success text-center pt-2 pb-0 mt-4">
                    <?php echo $user['user_avatar']; ?>
                    <div class="card-body">
                        <h5 class="card-title text-center text-white">
                            <?php echo $user['user_firstname']; ?> <?php echo $user['user_lastname']; ?>
                        </h5>
                    </div>
                    <div class="card-footer text-center">
                        <a href="mailto:<?php echo $user['user_email']; ?>" 
                        class="btn btn-sm btn-danger text-white">Mail</a>
                    </div>
                </div>

                <!-- multiple user -->
                <div class="row">
                    <?php foreach($user as $usr): ?>
                        <div class="col-md-4">
                            <div class="card bg-success text-center pt-2 pb-0 mt-4">
                                <?php echo $usr['user_avatar']; ?>
                                <div class="card-body">
                                    <h5 class="card-title text-center text-white">
                                    <?php echo $usr['user_firstname']; ?> <?php echo $usr['user_lastname']; ?>
                                    </h5>
                                </div>
                                <div class="card-footer text-center">
                                    <a href="mailto:<?php echo $usr['user_email']; ?>" 
                                    class="btn btn-sm btn-danger text-white">Mail</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                
            <?php endif; ?>

        </div>
    </div>
</div>

<?php get_footer();?>