<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
    <div class="type-1264">
        <div class="container">
        <div class="parallax-bg-wrapper">
            <img class="image-size" src="<?php echo $url_path ?>/images/section-bg.jpg">
            <div>
                <h2 class="top">Bữa Sáng & Buổi ăn Nhẹ</h2>

            </div>
            </div>
        </div>
    </div>