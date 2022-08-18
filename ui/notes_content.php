<?php 
    require dirname(dirname(__FILE__))."./components/common/top_img.php";
    require dirname(dirname(__FILE__))."./components/common/title_red_border.php";
    require dirname(dirname(__FILE__))."./components/notes/caution.php";
?>
<div class="notes_content_parent">
<?php 
    createTopImage();
?>
<div class="notes_caution_patent">
    <?php 
        createTitle('notes');
    ?>
    <div class="notes_description1">
    <?php 
        createNotesDescription1();
        createNotesCaution1();
        createNotesCaution2();
        createNotesCaution3();
    ?>
    </div>
</div>
</div>