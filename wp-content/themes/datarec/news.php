<?php
/*
Template Name: news
*/

get_header(); ?>

    <div id="rightcol">
        <?php get_sidebar(); ?>
    </div>

    <div id="content">
        <h2>Последние новости</h2>
        <?php
        $arg = array('post_type' => 'news',);
        $posts = new WP_Query($arg);
        ?>
        <?php while ($posts->have_posts()) : $posts->the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header>
                    <!-- Display featured image in right-aligned floating div -->
                    <div style="float: right; margin: 10px">
                        <?php the_post_thumbnail(array(100, 100)); ?>
                    </div>

                    <p style="background-color: #ECECEC"><?php the_date('d.m.Y '); ?><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></p>

                </header>

                <?php the_content(); ?>
            </article>
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
    </div>

<?php get_footer(); ?>