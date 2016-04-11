<?php

/*
Template Name: articles
*/

get_header(); ?>

    <section id="rightcol">
        <?php get_sidebar(); ?>
    </section>

    <section id="content">

        <?php
        $arg2 = [
            'post_type' => 'articles',
            'orderby' => 'date',
            'order' => 'ASC',
            'showposts' => '1'
        ];
        $query = new WP_Query($arg2);
        if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header>
                    <!-- Display featured image in right-aligned floating div -->
                    <div style="float: right; margin: 10px">
                        <?php the_post_thumbnail(array(100, 100)); ?>
                    </div>
                    <h2><span style="background-color: #ECECEC"><?php the_time('d.m.Y ') ?><a
                                href="<?php the_permalink() ?>"><?php the_title(); ?></a></span></h2>
                </header>
                <?php the_content(); ?>
            </article>
        <?php endwhile;
        else : ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
    </section>
<?php get_footer(); ?>