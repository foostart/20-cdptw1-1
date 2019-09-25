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
        <div class="row">
            <div class="col-md-12 col-xs-12 col-lg-12 col-sm-12">
                <div class="parallax-bg-wrapper">
                    <img class="image-size" src="<?php echo $url_path ?>/images/section-bg.jpg">
                    <div>
                        <h2 class="top">Breakfast & Brunch</h2>

                    </div>
                </div>
                <div class="parallax-bg-wrapper">
                    <img class="image-size" src="<?php echo $url_path ?>/images/dinner.jpg">
                    <div>
                        <h2 class="top">Dinner & Brunch</h2>

                    </div>
                </div>
                <div class="parallax-bg-wrapper">
                    <img class="image-size" src="<?php echo $url_path ?>/images/lunch.jpg">
                    <div>
                        <h2 class="top">Lunch & Brunch</h2>

                    </div>
                </div>
            </div>
            <div style="text-align:center">
        <span class="dot" onclick="currentSlide(0)"></span> 
        <span class="dot" onclick="currentSlide(1)"></span> 
        <span class="dot" onclick="currentSlide(2)"></span> 
      </div>  
        </div>
    </div>
</div>