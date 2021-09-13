<div class="post post-audio">
    <div class="post__content">
        <div class="post__icon"><i class="bi bi-music-note-beamed"></i></div>
        <span class="post__category"><?php echo get_the_category()[0]->name ?></span>
        <h3 class="post__title"><?php the_title() ?></h3>
        <span class="post__date"><?php the_time('F j, Y') ?></span>
        <div class="post__audio">
            <div class="post__audio-content">
                <button class="post__player">
                    <i class="bi bi-play-fill"></i>
                    <i class="bi bi-pause-fill hidden"></i>
                </button>
                <?php the_content(''); ?>
            </div>
        </div>
    </div>
</div>