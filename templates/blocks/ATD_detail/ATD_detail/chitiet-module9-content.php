<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div id="Insights"class="detail-9">
    <div class="wrapper-left-background">
    <div data-anchor-target="related-products" class="section-wrapper-component">
        <div class="container">
            <h3 class="text-center xx-thick">Related Products</h3>
            <div class="row same-height-related-products-component">

                    <div class="col-xs-12 col-sm-6">
                            <h5 class="h9">Recommended Accessories</h5>
                                                        <div class="media-tile-component same-height-target" >
                                    <div class="row">
                                        <div class="col-xs-5 col-sm-6">
                                            <div class="media-image">
                                                <a href="#">
                                                    <img class="img-responsive"src="image/detail-10.png" alt=""/>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xs-7 col-sm-6">
                                            <div class="media-content">
                                                <span class="subtitle light x-smaller">Monitoring</span><br>
                                                <a class="h7" href="#">Liebert IntelliSlot Unity Communications Cards</a>
                                                <p class="normal hidden-xs">Provides Web access, environmental sensor data, and third-party customer protocols for Vertiv equipment. The cards employ Ethernet and RS-485 networks to monitor and manage a wide range of operating parameters, alarms and notifications. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    </div>
            </div>
            <div class="text-center">
                <a href="#" class="button primary">
More products                </a>
            </div>
        </div>
    </div>
</div>
</div>
