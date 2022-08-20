<?php 
    require dirname(dirname(__FILE__))."./components/common/reservation_btn/reservation_btn.php";
    require dirname(dirname(__FILE__))."./components/front_page/front_top_img/front_top_img.php";
    require dirname(dirname(__FILE__))."./components/front_page/top_circle_img/top_circle_img.php";
    require dirname(dirname(__FILE__))."./components/front_page/company_address_bottom/company_address_bottom.php";
    require dirname(dirname(__FILE__))."./components/front_page/top_healing_space/top_healing_space.php";
?>
<div class="top_page_container">
    <?php 
        createFrontTopImage();
    ?>
    <div class="page_top_circle_img_parent">
        <?php 
            createTopCircleImageSalon();
            createTopCircleImageMenu();
            createTopCircleImageNote();
        ?>
    </div>
    <div class="page_top_healing_space_parent">
        <img class="page_top_healing_space" src="<?php echo get_stylesheet_directory_uri(); ?>/img/healing_space.jpg"/>
    </div>
    <div class="page_top_information_parent">
        <?php 
            createHealingSpace();
        ?>
        <div class="page_top_information_address_parent">
            <?php 
                createCompanyInfo();
            ?>
            <iframe 
                class="page_top_map"
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12946.546667419523!2d139.9006607!3d35.7843004!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x69dd1692ac336e85!2z5p2-5oi46aeF!5e0!3m2!1sja!2sca!4v1660284016819!5m2!1sja!2sca" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>