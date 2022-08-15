<?php
$url = get_site_url();
echo <<<HTML
    <button 
        type="button" 
        class="c_reservation_btn"
        onclick="window.location.href=$url">
        ご予約はこちら
    </button>
HTML;
?>