<?php 

$cutom_title_main = '';
$custom_title_sub = '';

function getTitle($title_str){
    if($title_str == 'about_us'){
        echo <<<HTML
        <div class="title_parent">
           <div class="custom_title">
               サロンについて
               <span>About us</span>
           </div>
       </div>
       HTML;
    } else if($title_str == 'access_map'){
        echo <<<HTML
        <div class="title_parent">
           <div class="custom_title">
                アクセスマップ
                <span>Access map</span>
           </div>
       </div>
       HTML;
    }
}

?>