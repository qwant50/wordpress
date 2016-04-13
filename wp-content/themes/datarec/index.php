<?php get_header(); ?>

    <div id="rightcol">
        <?php get_sidebar(); ?>
    </div>

    <div id="content">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <?php the_content(); ?>

        <?php endwhile;
        else: ?>
            <p><?php _e('404'); ?></p>
        <?php endif; ?>
    </div>


<?php get_footer(); ?>