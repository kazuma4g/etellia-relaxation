<header>
    <div class="header_parent">
        <img 
            class="page_logo_img" 
            src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png"
            onclick="window.location.href='<?= get_site_url(); ?>'"
            />
        <button 
            type="button" 
            class="reservation_btn"
            onclick="window.location.href='<?= get_site_url(); ?>'">
            ご予約はこちら
        </button>
    </div>
    <div class="header_menu_bar">
        <nav class="navbar">
            <ul class="nav_menu">
                <li class="nav_item"><a  href="<?= get_site_url(); ?>">トップ</a></li>
                <li class="nav_item"><a href="<?= get_site_url(); ?>/about/">サロンについて</a></li>
                <li class="nav_item"><a href="<?= get_site_url(); ?>/menu/">メニュー</a></li>
                <li class="nav_item"><a href="<?= get_site_url(); ?>/notes/">注意事項</a></li>
                <li class="nav_item"><a href="<?= get_site_url(); ?>/recruit/">求人情報</a></li>
            </ul>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
    </div>
</header>
