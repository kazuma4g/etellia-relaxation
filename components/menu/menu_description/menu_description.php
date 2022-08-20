<?php
function createMenuDescription($menu_type){

    if($menu_type == 'facial'){
        echo <<<HTML
        <div class="menu_description_parent">
            <div class="menu_description">
                全国でも取り扱い希少な最新美容マシン「プラズマシャワー」が施術可能！<br />
                お肌の細菌を除去し、高濃度ヒト幹細胞美容液より浸透させる事でうるツヤ肌に♪
            </div>
        </div>
        HTML;
    }

    if($menu_type == 'body'){
        echo <<<HTML
        <div class="menu_description_parent">
            <div class="menu_description">
                蒸しタオルでの温湿布やタオルを使って、凝り固まった筋肉をほぐします。<br />
                凝りがひどく辛いという方にお勧めです!
            </div>
        </div>
        HTML;
    }

    if($menu_type == 'foot'){
        echo <<<HTML
        <div class="menu_description_parent">
            <div class="menu_description">
                足を洗う&rarr;足裏マッサージ&rarr;ふくらはぎマッサージ&rarr;蒸しタオルで保温<br />
                その後、軽くたたいてリンパの流れを促進し、むくみを改善
            </div>
        </div>
        HTML;
    }

}
?>