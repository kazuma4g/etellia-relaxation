<?php 
require dirname(dirname(__FILE__))."./components/top_img.php";
require dirname(dirname(__FILE__))."./components/title_red_border.php";
?>
<div class="about_parent">
    <?php 
    createTopImage();
    ?>
    <div class="about_us_parent">
        <?php 
        getTitle('about_us');
        ?>
        <div class="about_us_content_parent">
            <div class="about_us_content1_parent">
                <div class="about_us_content1_img_parent">
                    <div class="about_us_content1_img"></div>
                </div>
                <div class="about_us_content1_text_parent">
                    <div class="about_us_content1_text">
                        <p class="about_us_textblock1">JR松戸駅から徒歩1分</p>
                        「残業の後に行きたい」<br>
                        「疲れを明日に持ちこしたくない」<br>
                        「身体も心も疲れちゃった···」<br>
                        <p class="about_us_textblock2">
                            <nobr>という方を少しでも癒したいという思いから誕生しました。</nobr>
                            
                        </p>
                        <p class="about_us_textblock2">
                            仕事帰り・残業帰りの時間でも<br>
                            <nobr>気軽に通ってもらえるサロンになれば幸いです。</nobr>
                        </p>
                    </div>
                </div>
            </div>
            <div class="about_us_content2_parent">
                <div class="about_us_content2_text_parent">
                    <div class="about_us_content2_text">
                        <p class="about_us_textblock1">
                            日々の疲れ、不調は、全身のバランスの乱れが原因です。<br>
                        </p>
                        <p class="about_us_textblock1">
                            ETELLIAリラクゼーションでは心身のバランスをとり、<br>
                            当たり前の日々をありがたい日々に変えていく<br>
                            リラクゼーションをご提供します。
                        </p>
                        <p class="about_us_textblock1">
                            <nobr>
                            こだわりのVIPルームには足湯やメイクスペースも完備しております。
                            </nobr>
                        </p>
                        <p>極上の癒しの時間をお過ごしください♪</p>
                    </div>
                </div>
                <div class="about_us_content2_img_parent">
                    <div class="about_us_content2_img"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="access_map_parent">
        <?php 
            getTitle('access_map');
        ?>
        <div class="about_us_google_map_parent">
         <iframe 
            class="about_us_google_map"
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12946.546667419523!2d139.9006607!3d35.7843004!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x69dd1692ac336e85!2z5p2-5oi46aeF!5e0!3m2!1sja!2sca!4v1660284016819!5m2!1sja!2sca" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade"></iframe>
            <p>
                JR松戸駅西口より徒歩1分
            </p>
        </div>
    </div>
</div>