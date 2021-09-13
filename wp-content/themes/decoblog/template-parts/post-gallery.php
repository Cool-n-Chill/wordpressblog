<div class="post post-gallery">
    <div class="post__gallery">
        <?php the_post_thumbnail(); ?>
    </div>
    <div class="post__content">
        <div class="post__icon"><i class="bi bi-image"></i></div>
        <span class="post__category"><?php get_the_category()[0]->name ?></span>
        <h3 class="post__title"><?php the_title() ?></h3>
        <span class="post__date"><?php the_time('F j, Y') ?></span>
        <?php the_content(''); ?>
        <a class="post__more" href="<?php the_permalink(); ?>">read more</a>
    </div>
    <div class="post__footer">
        <div class="post__comment">
            <i class="bi bi-chat-text comment__icon"></i>
            <span class="post__comments">
                <?php comments_number( 'no comments', '1 comment', '% comments'); ?>
            </span>
        </div>
        <div class="post__social">
            <i class="bi bi-twitch"></i>
            <i class="bi bi-twitter"></i>
            <i class="bi bi-facebook"></i>
            <i class="bi bi-github"></i>
        </div>
    </div>
</div>