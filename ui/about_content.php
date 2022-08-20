<?php 
require dirname(dirname(__FILE__))."./components/common/top_img/top_img.php";
require dirname(dirname(__FILE__))."./components/common/title_red_border/title_red_border.php";
require dirname(dirname(__FILE__))."./components/about/about_us/about_us.php";
require dirname(dirname(__FILE__))."./components/about/about_us_google_map/about_us_google_map.php";
?>
<div class="about_parent">
    <?php 
    createTopImage();
    ?>
    <div class="about_us_parent">
        <?php 
        createTitle('about_us');
        createAboutUs();
        ?>
    </div>
    <div class="access_map_parent">
        <?php 
            createTitle('access_map');
            createAboutUsGoogleMap();
        ?>
    </div>
</div>