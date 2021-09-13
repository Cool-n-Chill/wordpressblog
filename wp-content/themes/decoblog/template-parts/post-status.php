<div class="post post-background">
    <div class="post__content" style="background-image: url("<?php the_post_thumbnail_url() ?>")">
        <span class="post__category"><?php echo get_the_category()[0]->name ?></span>
        <h3 class="post__title"><?php the_title() ?></h3>
        <span class="post__date"><?php the_time('F j, Y') ?></span>
        <?php the_content(''); ?>
        <a class="post__more" href="<?php the_permalink(); ?>">read more</a>
    </div>
</div>
