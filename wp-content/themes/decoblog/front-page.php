<?php get_header(); ?>

<?php  if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php the_content() ?>
<?php endwhile; ?>
    <!-- post navigation -->
<?php else: ?>
    <!-- no post found -->
<?php endif; ?>

<?php $query_posts = new WP_Query( array(
     'posts_per_page' => 12,
) );
$post_counter = 0;
?>

<section class="posts">
    <div class="container">
        <div class="row">
            <?php  if ($query_posts->have_posts()) : while ($query_posts->have_posts()) : $query_posts->the_post(); ?>
                <?php if ( !($post_counter % 3) ) : ?>
                    <div class="posts__column col-lg-3">
                <?php endif; ?>
                <?php get_template_part('template-parts/post', get_post_format()); ?>
                <?php $post_counter++; ?>
                <?php if ( !($post_counter % 3) ) : ?>
                    </div>
                <?php endif; ?>
            <?php endwhile; ?>
                <!-- post navigation -->
            <?php else: ?>
                <div class="post post-empty"></div>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
