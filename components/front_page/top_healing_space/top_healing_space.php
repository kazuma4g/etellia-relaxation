<?php 

function createHealingSpaceImage(){
    $basePath = get_stylesheet_directory_uri();
    echo <<<HTML
        <div class="page_top_healing_space_parent">
            <img class="page_top_healing_space" src="$basePath/img/healing_space.jpg"/>
        </div>
    HTML;
}

function createHealingSpace(){
    $baseUrl = get_site_url();
    echo <<<HTML
        <div class="page_top_information_reservation">
            <div class="page_top_information_text1">
                ETTELIA's healing space
            </div>
            <div class="page_top_information_text2">
                当店はあなたの心と体を癒す本格リラクゼーションサロンです。</br>
                リラクゼーション、アロママッサージ、足つぼマッサージ、ヘッドマッサージなど</br>
                多数のメニューを取り揃えております。</br>
                ゆったり静かな空間で、日頃のお疲れを解消しませんか？
            </div>
            <button 
                type="button" 
                class="c_reservation_btn"
                onclick="window.location.href='$baseUrl'">
                ご予約はこちら
            </button>
        </div>
    HTML;
}

?>