<?php 

$cutom_title_main = '';

function createTitle($title_str){
    if($title_str == 'about_us'){
        echo <<<HTML
        <div class="title_parent">
           <div class="custom_title">
               サロンについて
               <span>About us</span>
           </div>
       </div>
       HTML;
    } 
    
    if($title_str == 'access_map'){
        echo <<<HTML
        <div class="title_parent">
           <div class="custom_title">
                アクセスマップ
                <span>Access map</span>
           </div>
       </div>
       HTML;
    }

    if($title_str == 'facial'){
        echo <<<HTML
        <div class="title_parent">
           <div class="custom_title">
                フェイシャル
                <span>Facial</span>
           </div>
       </div>
       HTML;
    }

    if($title_str == 'body'){
        echo <<<HTML
        <div class="title_parent">
           <div class="custom_title">
                ボディ
                <span>Body</span>
           </div>
       </div>
       HTML;
    }

    if($title_str == 'foot'){
        echo <<<HTML
        <div class="title_parent">
           <div class="custom_title">
                フットケア
                <span>Foot</span>
           </div>
       </div>
       HTML;
    }

    if($title_str == 'notes'){
        echo <<<HTML
        <div class="title_parent">
           <div class="custom_title">
                注意事項
                <span>Caution</span>
           </div>
       </div>
       HTML;
    }

    if($title_str == 'outline'){
        echo <<<HTML
        <div class="title_parent">
           <div class="custom_title">
                求人情報
                <span>Outline</span>
           </div>
       </div>
       HTML;
    }

}

?>