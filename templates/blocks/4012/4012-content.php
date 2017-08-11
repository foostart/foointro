<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="module-4012">
    <div class="lon">
        <div class="product-hero-component">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5">
                        <img class="img-responsive" src="image/trinergy-cube-vertiv-hero2.png" alt=""/>
                    </div>
                    <div class="col-sm-7 col-lg-6 product-hero-content ">
                        <span class="subtitle">Uninterruptible Power Supplies (UPS)</span>
                        <h1 class="productnamedata">Liebert Trinergy Cube UPS, 150 kW-3.4 MW</h1>
                        <p class="xx-light">Liebert® Trinergy™ Cube is the new generation of Trinergy UPS delivering unsurpassed performance to enterprise data centers. Ready to evolve with growing business demands, it offers the highest level of power availability as well as reduced TCO, minimum energy consumption and CO2 emissions.</p>
                        <span class="bottom-left-aligned">This product is approved by the ETL (Energy Technology List)</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="list-tile-component">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7 col-sm-offset-5">
                        <div class="row">
                            <div class="list-tile col-sm-4">
                                <span class="subtitle">BEST SUITED FOR</span>
                                <ul>
                                    <li>Banking, Financial and Insurance</li>
                                    <li>Data Center/Colocation/Hosting</li>
                                    <li>Telecom</li>
                                    <li>Healthcare</li>
                                    <li>Manufacturing</li>
                                </ul>
                            </div>
                            <div class="list-tile col-sm-4">
                                <span>Quick Links</span>
                                <ul class="tt2">
                                    <li>
                                        <a href="#">Product Brochure</a>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <a href="#">Contacts</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm-4">
                                <button type="button" class="button primary">
                                    How to buy
                                </button>
                                <button type="button" class="button light">
                                    Save for later
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="media-gallery-component">
            <div class="container">
                <span>Gallery</span>
                <a><img class="img-responsive" src="image/trinergy-cube-vertiv-hero2.png" alt=""/></a>
            </div>
        </div>
    </div>
    <div class="nho">
        <div class="media-gallery-component">
            <div class="container">
                <a><img class="img-responsive" src="image/trinergy-cube-vertiv-hero2.png" alt=""/></a>
            </div>
        </div>
        <div class="product-hero-component">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 product-hero-content ">
                        <span class="subtitle">Uninterruptible Power Supplies (UPS)</span>
                        <h1 class="productnamedata" data-productname="Liebert Trinergy Cube UPS, 150 kW-3.4 MW">Liebert Trinergy Cube UPS, 150 kW-3.4 MW</h1>
                        <p class="xx-light">Liebert® Trinergy™ Cube is the new generation of Trinergy UPS delivering unsurpassed performance to enterprise data centers. Ready to evolve with growing business demands, it offers the highest level of power availability as well as reduced TCO, minimum energy consumption and CO2 emissions.</p>

                    </div>
                </div>
            </div>
        </div>
        <div class="list-tile-component">
            <div class="container">
                <div class="row">
                    <div class="list-tile col-xs-12">
                        <span class="subtitle nho2">BEST SUITED FOR</span>
                        <ul>
                            <li>Banking, Financial and Insurance</li>
                            <li>Data Center/Colocation/Hosting</li>
                            <li>Telecom</li>
                            <li>Healthcare</li>
                            <li>Manufacturing</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="list-tile col-xs-12">
                        <span class="subtitle nho2">Quick Links</span>
                        <ul class="tt2">
                            <li>
                                <a href="#">Product Brochure</a>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <a href="#">Contacts</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <span class="subtitle note">This product is approved by the ETL (Energy Technology List)</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <button type="button" class="button primary">
                            How to buy
                        </button>
                        <button type="button" class="button light">
                            Save for later
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>