<?php 

function createCompanyInfo(){
    echo <<<HTML
        <div class="page_top_information_address">
            <div class="page_top_information_company_name">
                ETELLIA リラクゼーション
            </div>
            <hr/>
            <div class="page_top_information_company_address1">
                〒111-1111
            </div>
            <div class="page_top_information_company_address2">
                千葉県松戸市松戸1-1-1 松戸ビル7F
            </div>
            <hr/>
            <div class="page_top_information_company_hours1">
                月 - 金 10:00 ~ 20:00
            </div>
            <div class="page_top_information_company_hours2">
                土日祝 定休日
            </div>
            <hr/>
            <div class="page_top_information_company_tel">
                TEL&nbsp;&nbsp;&nbsp; <span>047-111-1111</span>
            </div>
            <hr/>
        </div>
    HTML;
}

?>