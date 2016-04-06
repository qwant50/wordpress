<?php get_header(); ?>

    <div id="rightcol">

        <?php get_sidebar(); ?>

        <h2>Наши магазины</h2>

        <p><span class="fontLarge">Магазин <span class="enter">Enter</span></span><br>
            <a href="http://www.enter.biz.ua/">Компьютеры, комплектующие, ноутбуки, Hi-Fi аппаратура, цифровые
                фотоаппараты, оргтехника и т.д.</a></p>
        <a href="http://www.enter.biz.ua/"><img src="/img/enterbaner.jpg" width="265"
                                                alt="Компьютеры, комплектующие, ноутбуки, Hi-Fi аппаратура, цифровые фотоаппараты, оргтехника и т.д."/></a>
        <img class="devider"/>

        <p><span class="fontLarge">Магазин <span class="server">СЕРВЕР</span></span><br>
            <a href="http://server.kh.ua/">Оптово-розничная торговля компьютерной техникой</a></p>
        <a href="http://server.kh.ua/"><img src="/img/serverbaner.jpg" height="50" width="260"
                                            alt="Оптово-розничная торговля компьютерной техникой"/></a>
        <img class="devider"/>

        <p><span class="fontLarge">Компания <span class="dclink">DC-LINK</span></span><br>
            <a href="http://dclink.com.ua/">компьютеры, комплектующие, сети, цифровая техника</a></p>
        <a href="http://dclink.com.ua/"><img src="/img/dclink54.png" height="50" width="100"
                                             alt="компьютеры, комплектующие, сети, цифровая техника"/></a>
        <img class="devider"/>


        <p><span class="fontLarge">Интернет-магазин <span class="cobra">Cobra</span></span><br>
            <a href="http://cobra.com.ua/">компьютеры и комплектующие</a></p>
        <a href="http://cobra.com.ua/"><img src="/img/cobra54.png" height="50" width="265"
                                            alt="компьютеры и комплектующие"/></a>
        <img class="devider"/>

        <br>

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