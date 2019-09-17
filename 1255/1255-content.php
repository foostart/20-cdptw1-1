<?php
include '../config.php';
if (empty($url_path)) {
    $url_host = 'http://' . $_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
}
?>
<div class="Module-1255">
    <div class="container">
        <div class="row">
            <div class="chef">
                <img src="images/chef.png" alt="img-reposnive">
            </div>
            <div class="text">
                <div class="title">
                    <h3>Tham gia nhóm!</h3>
                </div>
                <div class="name">
                    <p>Chúng tôi luôn tìm kiếm những cá nhân chuyên dụng và nhiệt huyết, những người đang phấn đấu để xây dựng sự nghiệp của họ trong ngành khách sạn.<br>
                        Nếu bạn muốn tham gia nhóm giải thưởng này, vui lòng truy cập trang Tuyển dụng hiện tại của chúng tôi và đăng ký trực tuyến. <br>
                        Chúng tôi cũng cung cấp một chương trình thực tập tại Văn phòng Hỗ trợ của chúng tôi.
                    </p>
                </div>
                <button class="hvr-sweep-to-top"> 
                    Áp dụng ngay bây giờ
                </button>
            </div>
        </div>
    </div>
</div>