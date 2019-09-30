<?php
//include '../config.php';
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
            <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                <div class="chef">
                    <img src="images/chef.png" alt="img-reposnive">
                </div>
                <div class="text">
                    <div class="title">
                        <h3>Join the team!</h3>
                    </div>
                    <div class="name">
                        <p>We are always looking for dedicated and dedicated individuals who are striving to build their
                            careers in the hospitality industry. <br>If you would like to join this award group, please
                            visit our Current Recruitment page and register online. <br>We also offer an internship
                            program at our Support Office.
                        </p>
                    </div>
                    <a class="login-window button" href="#login-box">Apply Now</a>
                    <div id="login-box" class="login">
                        <p class="login_title"> Đăng nhập</p>
                        <a href="#" class="close"><img src="./images/close.png" class="img-close" title="Close Window"
                                alt="Close" /></a>
                        <form method="post" class="login-content" action="#">
                            <label>
                                <span>Tên hoặc email</span>
                                <input id="username" name="username" value="" type="text" autocomplete="on"
                                    placeholder="Username">
                            </label>
                            <label >
                                <span>Mật khẩu</span>
                                <input id="password" name="password" value="" type="password" placeholder="Password">
                            </label>
                            <button class="button submit-button" type="button">Đăng nhập</button>
                            <p>
                                <a class="rb-password" href="#">Quên mật khẩu?</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>