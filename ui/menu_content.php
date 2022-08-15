<?php 
    require dirname(dirname(__FILE__))."./components/reservation_btn.php";
    require dirname(dirname(__FILE__))."./components/top_img.php";
    require dirname(dirname(__FILE__))."./components/title_red_border.php";
    require dirname(dirname(__FILE__))."./components/menu_description.php";
?>
<div class="menu_content_parent">
    <?php 
        createTopImage();
    ?>
    <div class="menu_facial_parent">
        <?php 
            getTitle('facial');
        ?>
        <div class="facial_menu_text_parent">
            <?php 
                createMenuDescription('facial');
            ?>
        </div>
        <div class="facial_menu_list_parent">
            <div class="smaller_facial_parent">
                <div class="smaller_facial_title">小顔フェイシャル</div>
                <div class="smaller_facial_price_list_parent">
                    <div class="smaller_facial_price1">
                        60分<span>¥3,000</span>
                    </div>
                    <div class="smaller_facial_price2">
                        90分<span>¥5,000</span>
                    </div>
                    <div class="smaller_facial_price3">
                        120分<span>¥7,000</span>
                    </div>
                </div>
            </div>
            <div class="smaller_adjustment_parent">
                <div class="smaller_adjustment_title">小顔矯正</div>
                    <div class="smaller_adjustment_price_list_parent">
                        <div class="smaller_adjustment_price1">
                            60分<span>¥9,000</span>
                        </div>
                        <div class="smaller_adjustment_price2">
                            90分<span>¥12,000</span>
                        </div>
                    </div>
                </div>
            <div class="prasma_shower_parent">
                <div class="prasma_shower_title">プラズマシャワー</div>
                    <div class="prasma_shower_price_list_parent">
                        <div class="prasma_shower_price1">
                            30分<span>¥6,000</span>
                        </div>
                        <div class="prasma_shower_price2">
                            60分<span>¥11,000</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu_reservation_btn_1_parent">
            <?php 
                createReservationButton();
            ?>
            </div>
        </div>
        <div class="menu_body_parent">
            <div class="body_menu_title_parent">
                <div class="body_menu_title">
                    ボディ
                    <span>Body</span>
                </div>
            </div>
            <div class="body_menu_text_parent">
            <?php 
                createMenuDescription('body');
            ?>
            </div>
    </div>
</div>