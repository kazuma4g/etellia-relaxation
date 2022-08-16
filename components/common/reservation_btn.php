<?php
function createReservationButton(){
    echo <<<HTML
    <button 
        type="button" 
        class="c_reservation_btn"
        onclick="window.location.href='<?= get_site_url(); ?>'">
        ご予約はこちら
    </button>
    HTML;
}
?>