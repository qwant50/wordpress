<?php get_header(); ?>

    <div id="rightcol">

        <?php
        get_sidebar();
        require_once 'shops.php';
        ?>

    </div>

    <div id="content">
        <h2>Последние новости</h2>
        <?php
        $mypost = array( 'post_type' => 'news', );
        $loop = new WP_Query( $mypost );
        ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post();?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <!-- Display featured image in right-aligned floating div -->
                    <div style="float: right; margin: 10px">
                        <?php the_post_thumbnail( array( 100, 100 ) ); ?>
                    </div>
                    <!-- Display Title and Author Name -->
                    <p style="background-color: #ECECEC"><?php the_date('d.m.Y '); the_title(); ?></p>

                </header>
                <!-- Display movie review contents -->
                <div class="entry-content"><?php the_content(); ?></div>
            </article>
        <?php endwhile; ?>
<?php wp_reset_query(); ?>
<?php get_footer(); ?>