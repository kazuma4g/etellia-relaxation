<?php 

function createBodyMenuItem($body_menu_type){
    switch ($body_menu_type) {
        case "body_menu1":
            getBodyMenuA();
            break;
        case "body_menu2":
            getBodyMenuB();
            break;
        case "body_menu3":
            getBodyMenuC();
            break;
        case "body_menu4":
            getBodyMenuD();
            break;
        default:
            
            break;
    }
}

function getBodyMenuA(){
    echo <<<HTML
    <div class="body_menu_item_parent">
        <div class="body_menu_item_title_parent">
            <div class="body_menu_desciption1_parent">
                <div class="body_menu_desciption1_1">Aコース</div>
                <div class="body_menu_desciption1_2">全身エステ</div>
            </div>
            <div class="body_menu_desciption2">
                &lt; 頭・首・肩 &gt;を集中的にほぐします。
            </div>
        </div>        
        <div class="body_menu_item_price_list_parent">
            <div class="body_menu_item_price1">
                30分<span>&#165;3,000</span>
            </div>
        </div>
    </div>
HTML;
}

function getBodyMenuB(){
    echo <<<HTML
    <div class="body_menu_item_parent">
        <div class="body_menu_item_title_parent">
            <div class="body_menu_desciption1_parent">
                <div class="body_menu_desciption1_1">Bコース</div>
                <div class="body_menu_desciption1_2">全身エステ</div>
            </div>
            <div class="body_menu_desciption2_B">
                <nobr>&lt; 頭・首・肩・背中・腰 &gt;を集中的にほぐします。</nobr>
            </div>
        </div>        
        <div class="body_menu_item_price_list_parent">
            <div class="body_menu_item_price1">
                60分<span>&#165;6,000</span>
            </div>
        </div>
    </div>
HTML;
}

function getBodyMenuC(){
    echo <<<HTML
    <div class="body_menu_item_parent">
        <div class="body_menu_item_title_parent">
            <div class="body_menu_desciption1_parent">
                <div class="body_menu_desciption1_1">Cコース</div>
                <div class="body_menu_desciption1_2">全身エステ</div>
            </div>
            <div class="body_menu_desciption2_C">
                <nobr>&lt; 頭・首・肩・背中・腰・太もも・ふくらはぎ &gt;を集中的にほぐします。</nobr>
            </div>
        </div>        
        <div class="body_menu_item_price_list_parent">
            <div class="body_menu_item_price1">
                90分<span>&#165;9,000</span>
            </div>
        </div>
    </div>
HTML;
}

function getBodyMenuD(){
    echo <<<HTML
    <div class="body_menu_item_parent">
        <div class="body_menu_item_title_parent">
            <div class="body_menu_desciption1_parent">
                <div class="body_menu_desciption1_1">Dコース</div>
                <div class="body_menu_desciption1_2">全身エステ</div>
            </div>
            <div class="body_menu_desciption2_D">
                 <nobr>&lt; 頭・首・肩・背中・腰・太もも・ふくらはぎ &gt;を集中的にほぐします。</nobr>
            </div>
        </div>        
        <div class="body_menu_item_price_list_parent">
            <div class="body_menu_item_price1">
                120分<span>&#165;12,000</span>
            </div>
        </div>
    </div>
HTML;
}

?>