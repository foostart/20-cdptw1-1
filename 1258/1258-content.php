
<?php
include '../config.php';
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
                    Gordon có sẵn sàng tham dự hoặc nói chuyện tại sự kiện của chúng tôi không?

                </div>
            </div>
            <div class="space"></div>
            <div class="answer">
                <div class="answer-logo">
                    <span>A</span>
                </div>
                <div class="answer-infor">
                    Như chúng tôi chắc chắn bạn có thể hiểu, nhật ký của Gordon rất bận rộn và thường được đặt trước rất xa. Do đó, anh ta không thể tham dự hoặc nói chuyện ở tất cả các sự kiện mà anh được mời đến.
                </div>
            </div>
        </div>
        <div class="da">
               <img src="images/hinh.png" alt="hinh">
        </div>
    </div>
</div>
