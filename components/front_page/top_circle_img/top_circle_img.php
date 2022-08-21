<?php 

function createTopCircleImages(){
    $url = get_site_url();
    echo <<<HTML
    <div class="page_top_circle_img_parent">
        <div class="circle_img_salon">
            <div class="circle_img_salon_filter" onclick="location.href='$url/about/';">
                <a class="circle_img_salon_text" href="$url/about/">Salon</a>
            </div>
        </div>
        <div class="circle_img_menu">
            <div class="circle_img_menu_filter" onclick="location.href='$url/menu/';">
                <a class="circle_img_menu_text" href="$url/menu/">Menu</a>
            </div>
        </div>
        <div class="circle_img_note">
            <div class="circle_img_note_filter" onclick="location.href='$url/notes/';">
                <a class="circle_img_note_text" href="$url/notes/">Notes</a>
            </div>
        </div>
    </div>
   HTML;
}

?>