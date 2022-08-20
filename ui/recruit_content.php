<?php 
    require dirname(dirname(__FILE__))."./components/common/top_img/top_img.php";
    require dirname(dirname(__FILE__))."./components/common/title_red_border/title_red_border.php";
    require dirname(dirname(__FILE__))."./components/recruit/outline.php";
?>
<div class="reqruit_content_parent">
<?php 
    createTopImage();
?>
<div class="recruit_outline_patent">
    <?php 
        createTitle('outline');
        createOutlineTable();
    ?>
</div>
</div>