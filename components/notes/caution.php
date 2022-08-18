<?php 

function createNotesDescription1(){
    echo <<<HTML
    <div class="notes_description_parent">
        <div class="notes_description">
            この度は数多くのサロン店の中から当店をお選び頂き、誠にありがとうございます。<br>
            当店では、皆様が安心して施術をお受け頂く為に、次の事項をご承諾頂いた方に限り施術をさせて頂きます。<br>
            ご理解とご協力をお願い致します。
        </div>
    </div>
    HTML;
}

function createNotesCaution1(){
    echo <<<HTML
    <div class="notes_caution1_parent">
        <div class="notes_caution1_title">
            1.施術について
        </div>
        <ul class="notes_caution1_list">
            <li>当店の施術はリラクゼーションを目的に行うものであり、治療を目的にしたものではございません。<span>&#8251;1</span></li>
            <li>当店では施術後、身体の不調等での返金や責任などは一切負いかねますので予めご了承ください。</li>
        </ul>
        <div class="notes_caution1_description">
            &#8251;1 医療法&#8231;薬事法&#8231;柔道整復師&#8231;あんまマッサージ指圧師&#8231;鍼灸師等に関する法律に接触しない施術となります。
        </div>
    </div>
    HTML;
}

?>