<?php if ('статьи' == get_the_title()):
    $arg = [
        'post_type' => 'articles',
        'orderby' => 'date',
        'order' => 'ASC',
        'showposts' => '10'
    ];
    $query = new WP_Query($arg);
    if ($query->have_posts()) : ?>
        <h2>Последние статьи</h2>
        <?php while ($query->have_posts()) : $query->the_post(); ?>
            <p align="left">
                <a href="<?php the_permalink() ?>"><?php the_time('d.m.Y ');
                    the_title(); ?></a>
            </p>
        <?php endwhile;
    endif;
    wp_reset_query();

endif;
require_once 'shops.php';
?>