<?php 
    require dirname(dirname(__FILE__))."./components/reservation_btn.php";
    require dirname(dirname(__FILE__))."./components/top_img.php";
    require dirname(dirname(__FILE__))."./components/title_red_border.php";
    require dirname(dirname(__FILE__))."./components/menu_description.php";
    require dirname(dirname(__FILE__))."./components/facial_menu.php";
?>
<div class="menu_content_parent">
    <?php 
        createTopImage();
    ?>
    <div class="menu_facial_parent">
        <?php 
            getTitle('facial');
        ?>
         <?php 
            createMenuDescription('facial');
        ?>
        <div class="facial_menu_list_parent">
            <?php 
                createFacialMenuItem1();
            ?>
             <?php 
                createFacialMenuItem2();
            ?>
            <?php 
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
                getTitle('body');
            ?>
            <?php 
                createMenuDescription('body');
            ?>
    </div>
</div>