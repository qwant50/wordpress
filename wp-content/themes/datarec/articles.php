<?php

/*
Template Name: articles
*/

get_header(); ?>

    <div id="rightcol">

        <?php
        get_sidebar();
        require_once 'shops.php';
        ?>

    </div>

    <div id="content">

        <?php query_posts('category_name=articles&orderby=date&order=ASC&showposts=1'); ?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>

        <?php endwhile;
        else: ?>
            <p><?php _e('404'); ?></p>
        <?php endif; ?>
    </div>


<?php get_footer(); ?>