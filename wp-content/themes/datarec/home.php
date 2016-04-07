<?php get_header(); ?>

    <div id="rightcol">

        <?php
        get_sidebar();
        require_once 'shops.php';
        ?>

    </div>

    <div id="content">
        <h1>News</h1>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p><em><?php the_time('l, F jS, Y'); ?></em></p>
            <hr>
        <?php endwhile;
        else: ?>
            <p><?php _e('404'); ?></p>
        <?php endif; ?>
    </div>


<?php get_footer(); ?>