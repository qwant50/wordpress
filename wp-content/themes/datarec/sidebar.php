<?php if ('статьи' == get_the_title()): ?>
    <h2>Последние статьи</h2>
    <?php query_posts('category_name=articles&orderby=date&order=ASC&showposts=10'); ?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <p align="left">
            <a href="<?php the_permalink() ?>"><?php the_date('d.m.Y ');
                the_title(); ?></a>
        </p>
    <?php endwhile;
    endif;
endif; ?>