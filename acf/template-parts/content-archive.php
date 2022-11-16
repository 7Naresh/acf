<?php if(have_posts()): while(have_posts()): the_post(); ?>
<div class="card shadow">
    <?php if(has_post_thumbnail()): ?>
    <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>" class="img-fluid">
    <?php endif; ?>
    <div class="card-body">
        <h4 class="card-title"><?php the_title(); ?></h4>
        <p class="card-text"><?php the_excerpt(); ?></p>
        <?php if(has_post_format('gallery')) :?>
        <?php the_content(); ?>
        <?php endif; ?>
    </div>
    <div class="card-footer text-right">
        <a href="<?php the_permalink(); ?>" class="btn btn-success btn-sm">Read more</a>
    </div>
</div>
<?php endwhile; else: endif; ?>