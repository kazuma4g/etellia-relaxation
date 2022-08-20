<?php 

function createAboutUsGoogleMap(){
    echo <<<HTML
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
    HTML;
}

?>