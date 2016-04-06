<!DOCTYPE html>
<html>
<head>
    <title><?php wp_title('|',1,'right'); ?> <?php bloginfo('name'); ?></title>
    <meta name="description" content="<?= $description ?>"/>
    <meta name="keywords" content="<?= $keywords ?>"/>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <link rel="icon" href="favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
</head>

<body>
<div id="wrapper">

    <div id="banner">
        <div id="banner_left">
            <h1>Центр Восстановления Данных</h1>

            <h2>Восстанавливаем данных с HDD, SSD, Flash-накопителей.<br>Восстановление данных с RAID массивов.</h2>
        </div>
        <div id="contactInfo">
            <div id="phone"><span>(093) 785-86-32</span><br>(многоканальный)<br><br>Skype: qwant50
            </div>
            <div id="adress">г. Харьков, пр. Ленина 48,<br> магазин Enter<br>(м.&nbsp;Ботанический сад)</div>
        </div>
    </div>

    <div id="horizontal">
        <?php wp_nav_menu(['menu_id' => 'nav',]); ?>
    </div>
