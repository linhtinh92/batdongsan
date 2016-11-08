<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php
        wp_title('|', true);
        bloginfo('name');
        ?>
    </title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php if (is_singular() && pings_open(get_queried_object())) : ?>
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php endif; ?>
    <?php wp_head(); ?>
</head>
<body>
<div class="container main-container">
    <div class="banner">
        <a href="vi.html" class="logo"><img src="styles/website/images/logo.png" alt="logo"/></a>
        <div class="hotline">Hotline: <span>0937 39 49 39</span></div>
    </div>
    <div class="navmenu">
        <ul>
            <li class="active">
                <a href="vi.html">
                    <span class="spanleft"></span>
                    <span class="spancenter">Trang chủ</span>
                    <span class="spanright"></span>
                </a>
            </li>
            <li>
                <a href="vi/gioi-thieu.html">
                    <span class="spanleft"></span>
                    <span class="spancenter">Giới thiệu</span>
                    <span class="spanright"></span>
                </a>
            </li>
            <li>
                <a href="vi/can-ho.html">
                    <span class="spanleft"></span>
                    <span class="spancenter">Căn hộ</span>
                    <span class="spanright"></span>
                </a>
            </li>
            <li>
                <a href="vi/dat-nen.html">
                    <span class="spanleft"></span>
                    <span class="spancenter">Đất nền</span>
                    <span class="spanright"></span>
                </a>
            </li>
            <li>
                <a href="vi/tin-tuc.html">
                    <span class="spanleft"></span>
                    <span class="spancenter">Tin tức</span>
                    <span class="spanright"></span>
                </a>
            </li>
            <li>
                <a href="vi/lien-he.html">
                    <span class="spanleft"></span>
                    <span class="spancenter">Liên hệ</span>
                    <span class="spanright"></span>
                </a>
            </li>
        </ul>
        <?php
        echo getMainmenu();
        ?>
        <form action="http://hungthinhland.info/vi/tim-kiem.html" method="get">
            <input type="text" name="keyword" class="txtSearch" placeholder="Tìm kiếm"/>
            <input type="hidden" name="action" value="search"/>
        </form>
        <div class="clearfix"></div>
    </div><!--navmenu-->