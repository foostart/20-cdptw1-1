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
                        <p>We are always looking for dedicated and dedicated individuals who are striving to build their careers in the hospitality industry. <br>If you would like to join this award group, please visit our Current Recruitment page and register online. <br>We also offer an internship program at our Support Office.
                        </p>
                    </div>
                    <button class="hvr-sweep-to-top"> 
                        Apply Now
                    </button>
                </div>
            </div>  
        </div>
    </div>
</div>