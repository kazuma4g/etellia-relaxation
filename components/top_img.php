<?php 

function createTopImage(){
    $title_string = '';

    if(is_page('about')){
        $title_string = 'Salon';
    } else if (is_page('menu')){
        $title_string = 'Menu';
    }

    echo <<<HTML
    <div class="top_img_parent">
        <div class="top_img_filter">
            <div class="top_img_text">
                $title_string
            </div>
        </div>
    </div>
    HTML;
}

?>