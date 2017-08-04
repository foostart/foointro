
<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module-4009">
    <div class="swiper-container">
        <h3>RELATED PRODUCT TYPES</h3>
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="col-xs-4">
                    <div class="content">
                        <img src="image/4009-1.jpg" alt=""/>
                        <div class="text">
                            <h4>Industrial AC and DC Systems</h4>
                            <p>Meet your specific industrial power requirements using our configured or custom-made industrial-grade products.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="content">
                        <img src="image/4009-2.jpg" alt=""/>
                        <div class="text">
                            <h4>Industrial AC and DC Systems</h4>
                            <p>Meet your specific industrial power requirements using our configured or custom-made industrial-grade products.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="content">
                        <img src="image/4009-3.jpg" alt=""/>
                        <div class="text">
                            <h4>Industrial AC and DC Systems</h4>
                            <p>Meet your specific industrial power requirements using our configured or custom-made industrial-grade products.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="col-xs-4">
                    <div class="content">
                        <img src="image/4009-4.jpg" alt=""/>
                        <div class="text">
                            <h4>Industrial AC and DC Systems</h4>
                            <p>Meet your specific industrial power requirements using our configured or custom-made industrial-grade products.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="content">
                        <img src="image/4009-5.jpg" alt=""/>
                        <div class="text">
                            <h4>Industrial AC and DC Systems</h4>
                            <p>Meet your specific industrial power requirements using our configured or custom-made industrial-grade products.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="content">
                        <img src="image/4009-6.jpg" alt=""/>
                        <div class="text">
                            <h4>Industrial AC and DC Systems</h4>
                            <p>Meet your specific industrial power requirements using our configured or custom-made industrial-grade products.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
        <div class="swiper-button-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
        <script src="js/4009-2.js" type="text/javascript"></script>
    </div>
    <div class="clearfix"></div>
</div>