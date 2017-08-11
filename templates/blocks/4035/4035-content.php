<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module-4035">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-push-6 col-sm-6 col-lg-push-5 col-lg-7 "  >
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="image/4035-1.jpg" alt=""/>
                        </div>
                        <div class="swiper-slide">
                            <img src="image/4035-2.jpg" alt=""/>
                        </div>
                        <div class="swiper-slide">
                            <img src="image/4035-3.jpg" alt=""/>
                        </div>
                        <div class="swiper-slide">
                            <img src="image/4035-4.jpg" alt=""/>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                    <div class="swiper-button-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
                    <script src="js/4035-2_1.js" type="text/javascript"></script>
                </div>
            </div>
            <div class="col-xs-12 col-sm-pull-6 col-sm-6 col-lg-pull-7 col-lg-5" >
                <div class="text">
                    <h3>HELPING YOU SUCCEED<br>WITH THESE PARTNER BENEFITS</h3>
                </div>
            </div>
        </div>

    </div>
</div>