
<?php
if (empty($url_path)) {
    $url_host = $_SERVER['HTTP_HOST'];

    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];

    $url_path = str_replace('\\', '/', $url_path);
}
?>
<div class="type-1258">
    <div class="container">
        <div class="faq">
            <div class="question">
                <div class="question-logo">
                    <span>Q</span>
                </div>
                <div class="question-infor">
                    Would Gordon like to become a patron od our charity?

                </div>
            </div>
            <div class="space"></div>
            <div class="answer">
                <div class="answer-logo">
                    <span>A</span>
                </div>
                <div class="answer-infor">
                As we certainly can understand, Gordon's diary is very busy and is often placed very far ahead. Therefore, he cannot attend or speak at all the events to which he is invited.
                </div>
            </div>
            <div class="img-center">
                <img class="img-v" src="./images/ornament-bottom.png" alt="">
            </div> 
        </div>
        
        
    </div>
</div>
