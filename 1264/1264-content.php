<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1264">
        <div class="row">
            <div class="col-md-12 col-xs-12 col-lg-12 col-sm-12">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"> 
                            <div class="text">
                                Breakfast and Brunch
                            </div>                                                   
                            <img src="./images/1264_1.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                        <div class="text">
                                Breakfast and Brunch
                            </div> 
                            <img src="./images/1264_2.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                        <div class="text">
                                Breakfast and Brunch
                            </div> 
                            <img src="./images/1264_3.jpg" alt="">
                        </div>

                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>

                <!-- Swiper JS -->
                <script src="./js/swiper.min.js"></script>

                <!-- Initialize Swiper -->
                <script>
                    var swiper = new Swiper('.swiper-container', {
                        navigation: {
                            nextEl: '.swiper-button-next',
                            prevEl: '.swiper-button-prev',
                        },
                    });
                </script>

            </div>
        </div>
  
</div>