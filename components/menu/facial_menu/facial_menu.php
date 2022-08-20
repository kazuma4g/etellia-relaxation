<?php 

function createFacialMenuItem1(){
    echo <<<HTML
        <div class="smaller_facial_parent">
                <div class="smaller_facial_title">小顔フェイシャル</div>
                <div class="smaller_facial_price_list_parent">
                    <div class="smaller_facial_price1">
                        60分<span>&#165;3,000</span>
                    </div>
                    <div class="smaller_facial_price2">
                        90分<span>&#165;5,000</span>
                    </div>
                    <div class="smaller_facial_price3">
                        120分<span>&#165;7,000</span>
                    </div>
                </div>
            </div>
        HTML;
}

function createFacialMenuItem2(){

    echo <<<HTML
        <div class="menu_item2_parent">
            <div class="menu_item2_title">小顔矯正</div>        
            <div class="menu_item2_price_list_parent">
                <div class="menu_item2_price1">
                    60分<span>&#165;9,000</span>
                </div>
                <div class="menu_item2_price2">
                    90分<span>&#165;12,000</span>
                </div>
            </div>
        </div>
        HTML;

}

function createFacialMenuItem3(){

    echo <<<HTML
        <div class="menu_item2_parent">
            <div class="menu_item2_title">プラズマシャワー</div>
                <div class="menu_item2_price_list_parent">
                    <div class="menu_item2_price1">
                        30分<span>&#165;6,000</span>
                    </div>
                    <div class="menu_item2_price2">
                        60分<span>&#165;11,000</span>
                    </div>
                </div>
            </div>
        </div>
        HTML;

}

?>