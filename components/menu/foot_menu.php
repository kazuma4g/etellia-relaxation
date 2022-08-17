<?php 

function createFootMenu1(){
    echo <<<HTML
    <div class="foot_menu1_parent">
            <div class="foot_menu1_title">
                台湾式足裏<br>
                <span>プラスオイルをする場合は&plus;&#165;500&nbsp;となります。</span>
            </div>
            <div class="foot_menu1_price_list_parent">
                <div class="foot_menu1_price1">
                    30分<span>¥3,000</span>
                </div>
                <div class="foot_menu1_price2">
                    45分<span>¥4,000</span>
                </div>
                <div class="foot_menu1_price3">
                    60分<span>¥5,500</span>
                </div>
            </div>
        </div>
    HTML;
}

function createFootMenu2(){
    echo <<<HTML
        <div class="foot_menu2_parent">
            <div class="foot_menu2_title">足つぼマッサージ</div>        
            <div class="foot_menu2_price_list_parent">
                <div class="foot_menu2_price1">
                    30分<span>&#165;3,000</span>
                </div>
            </div>
        </div>
        HTML;
}

?>