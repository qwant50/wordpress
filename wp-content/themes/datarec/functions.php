<?php
add_action( 'init', 'create_post_type' );
function create_post_type() {
    register_post_type( 'news',
        array(
            'labels' => array( // добавляем новые элементы в административную частьку
                'name' => __( 'Новости' ),
                'singular_name' => __( 'Новость' ),
                'has_archive' => true,
                'add_new' => 'Добавить новую новость',
                'not_found' => 'Ничего не найдено',
                'not_found_in_trash' => 'В корзине новостей не найдено'
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array( //добавляем элементы в редактор
                'title',
                'editor',
                'author',
                'trackbacks',
                'thumbnail',
                'page-attributes',
                'post-formats',
                'custom-fields'
            ),
            'taxonomies' => array('category', 'post_tag') //добавляем к записям необходимый набор таксономий
        ));

    register_post_type( 'articles',
        array(
            'labels' => array( // добавляем новые элементы в административную частьку
                'name' => __( 'Статьи' ),
                'singular_name' => __( 'Статья' ),
                'has_archive' => true,
                'add_new' => 'Добавить новую статью',
                'not_found' => 'Ничего не найдено',
                'not_found_in_trash' => 'В корзине статей не найдено'
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array( //добавляем элементы в редактор
                'title',
                'editor',
                'author',
                'trackbacks',
                'thumbnail',
                'page-attributes',
                'post-formats',
                'custom-fields'
            ),
            'taxonomies' => array('category', 'post_tag') //добавляем к записям необходимый набор таксономий
        ));
}