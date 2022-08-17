<?php 

function createBodyMenuItem($body_menu_type){
    switch ($body_menu_type) {
        case "body_menu1":
            echo <<<HTML
                    <div class="body_menu_item_parent">
                        <div class="body_menu_item_title_parent">
                            <div class="body_menu_desciption1_parent">
                                <div class="body_menu_desciption1_1">Aコース</div>
                                <div class="body_menu_desciption1_2">全身エステ</div>
                            </div>
                            <div class="body_menu_desciption2">
                                 ＜ 頭・首・肩 ＞を集中的にほぐします。
                            </div>
                        </div>        
                        <div class="body_menu_item_price_list_parent">
                            <div class="body_menu_item_price1">
                                30分<span>¥3,000</span>
                            </div>
                        </div>
                    </div>
                HTML;
            break;
        case "body_menu2":
            echo <<<HTML
                    <div class="body_menu_item_parent">
                        <div class="body_menu_item_title_parent">
                            <div class="body_menu_desciption1_parent">
                                <div class="body_menu_desciption1_1">Bコース</div>
                                <div class="body_menu_desciption1_2">全身エステ</div>
                            </div>
                            <div class="body_menu_desciption2_B">
                                <nobr>＜ 頭・首・肩・背中・腰 ＞を集中的にほぐします。</nobr>
                            </div>
                        </div>        
                        <div class="body_menu_item_price_list_parent">
                            <div class="body_menu_item_price1">
                                60分<span>¥6,000</span>
                            </div>
                        </div>
                    </div>
                HTML;
            break;
        case "body_menu3":
            echo <<<HTML
            <div class="body_menu_item_parent">
                <div class="body_menu_item_title_parent">
                    <div class="body_menu_desciption1_parent">
                        <div class="body_menu_desciption1_1">Cコース</div>
                        <div class="body_menu_desciption1_2">全身エステ</div>
                    </div>
                    <div class="body_menu_desciption2_C">
                        <nobr>＜ 頭・首・肩・背中・腰・太もも・ふくらはぎ ＞を集中的にほぐします。</nobr>
                    </div>
                </div>        
                <div class="body_menu_item_price_list_parent">
                    <div class="body_menu_item_price1">
                        90分<span>¥9,000</span>
                    </div>
                </div>
            </div>
        HTML;
            break;
        case "body_menu4":
            echo <<<HTML
            <div class="body_menu_item_parent">
                <div class="body_menu_item_title_parent">
                    <div class="body_menu_desciption1_parent">
                        <div class="body_menu_desciption1_1">Dコース</div>
                        <div class="body_menu_desciption1_2">全身エステ</div>
                    </div>
                    <div class="body_menu_desciption2_D">
                         <nobr>＜ 頭・首・肩・背中・腰・太もも・ふくらはぎ ＞を集中的にほぐします。</nobr>
                    </div>
                </div>        
                <div class="body_menu_item_price_list_parent">
                    <div class="body_menu_item_price1">
                        120分<span>¥12,000</span>
                    </div>
                </div>
            </div>
        HTML;
            break;
        default:
            
            break;
    }


}

?>