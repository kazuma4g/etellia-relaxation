<?php 
    require dirname(dirname(__FILE__))."./components/common/reservation_btn/reservation_btn.php";
    require dirname(dirname(__FILE__))."./components/common/top_img/top_img.php";
    require dirname(dirname(__FILE__))."./components/common/title_red_border/title_red_border.php";
    require dirname(dirname(__FILE__))."./components/menu/menu_description/menu_description.php";
    require dirname(dirname(__FILE__))."./components/menu/facial_menu/facial_menu.php";
    require dirname(dirname(__FILE__))."./components/menu/body_menu/body_menu.php";
    require dirname(dirname(__FILE__))."./components/menu/foot_menu/foot_menu.php";
?>
<div class="menu_content_parent">
    <?php 
        createTopImage();
    ?>
    
    <div class="menu_facial_parent">
        <?php 
            createTitle('facial');
            createMenuDescription('facial');
        ?>
        <div class="facial_menu_list_parent">
            <?php 
                createFacialMenuItem1();
                createFacialMenuItem2();
                createFacialMenuItem3();
            ?>
            <div class="menu_reservation_btn_1_parent">
            <?php 
                createReservationButton();
            ?>
            </div>
        </div>

    <div class="menu_body_parent">
        <?php 
            createTitle('body');
            createMenuDescription('body');
        ?>
        <div class="body_menu_list_parent">
            <?php 
                createBodyMenuItem('body_menu1');
                createBodyMenuItem('body_menu2');
                createBodyMenuItem('body_menu3');
                createBodyMenuItem('body_menu4');
            ?>
        </div>
        <div class="menu_reservation_btn_2_parent">
            <?php 
                createReservationButton();
            ?>
        </div>
    </div>

    <div class="menu_foot_parent">
    <?php 
            createTitle('foot');
            createMenuDescription('foot');
        ?>
    </div>

    <div class="foot_menu_list_parent">
        <?php 
            createFootMenu1();
            createFootMenu2();
        ?>
    </div> 
    <div class="menu_reservation_btn_3_parent">
        <?php 
            createReservationButton();
        ?>
    </div>

</div>