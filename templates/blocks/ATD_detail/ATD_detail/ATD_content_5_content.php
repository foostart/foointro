<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
 <div id="downloads" class="ATD_content_5">
            <div class="container">
                <h1>Download</h1>
                <div class="list-tile-component">
                    <div class="row">
                        <div class="col-xs-12 col-sm-3">
                            <div class="list-tile">
                                <span class="subtitle">
                                    Brochures and Data Sheets
                                </span>
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#">Liebert Trinergy Cube 150 kW-3.4 MW Brochure English</a>
                                    </li>
                                    <li>
                                        <a href="#">Liebert UPS Catalogue EN</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-3">
                            <div class="list-tile">
                                <span class="subtitle">Reports</span>
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#">High Efficiency Modes of Operation English</a>
                                    </li>
                                    <li>
                                        <a href="#">Intelligent Paralleling and Circular Redundancy English</a>
                                    </li>
                                    <li>
                                        <a href="#">Distributed and Centralized Bypass Architectures Compared English</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row dd">
                    <div class="col-xs-12">
                        <p>*To see model-specific downloads, you will need to go to the model-specific product page by selecting the model name in the specifications chart above.</p>
                </div>
                </div>
            </div>

        </div>