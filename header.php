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
        <nav>
            <ul>
                <li><a href="<?= get_site_url(); ?>">トップ</a></li>
                <li><a href="<?= get_site_url(); ?>/about/">サロンについて</a></li>
                <li><a href="#">メニュー</a></li>
                <li><a href="#">注意事項</a></li>
                <li><a href="#">求人情報</a></li>
            </ul>
        </nav>
    </div>
    <div class="header_menu_icon_parent">
        
    </div>
</header>
