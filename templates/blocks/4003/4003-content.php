<?php
    $url_host = $_SERVER['HTTP_HOST'];

    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="module-4002">
  
    
            <h3 class="text-center section-header">
            FEATURED PRODUCTS
        </h3>
            <div class="sld-hover">
                <div id="owl-demo3">

                    <div class="item">
                        <div class="container">
                            <div class="Bannersld">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="col-sm-12 ">
                                            <div class="imagebaner">
                                                <a href="#">
                                                    <img src="image/h4.png" alt="" />
                                                </a>

                                            </div>
                                            <div class="panel-body truncate-component">
                                                <small>Software</small>
                                                <h3><a href="#" tabindex="0">Trellis™ Enterprise Solutions</a>
                </h3>
                                                <p class="truncate-text">By providing real-time, integrated view of IT and facility assets, the Trellis DCIM solution makes it easier to collaborate,...</p>
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="imagebaner">
                                                <a href="#">
                                                    <img src="image/h5.jpg" alt="" />
                                                </a>

                                            </div>
                                            <div class="panel-body truncate-component">
                                                <small>Software</small>
                                                <h3><a href="#" tabindex="0">Trellis™ Enterprise Solutions</a>
                </h3>
                                                <p class="truncate-text">By providing real-time, integrated view of IT and facility assets, the Trellis DCIM solution makes it easier to collaborate,...</p>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-sm-6">

                                        <div class="imagebanerbig">
                                            <a href="#">
                                                <img src="image/h6.png" alt="" />
                                            </a>
                                            <div class="panel-body truncate-component">
                                                <small>Software</small>
                                                <h3><a href="#" tabindex="0">Trellis™ Enterprise Solutions</a>
                </h3>
                                                <p class="truncate-text">By providing real-time, integrated view of IT and facility assets, the Trellis DCIM solution makes it easier to collaborate,...</p>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="container">
                            <div class="Bannersld">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="col-sm-12 ">
                                            <div class="imagebaner">
                                                <a href="#">
                                                    <img src="image/h4.png" alt="" />
                                                </a>

                                            </div>
                                            <div class="panel-body truncate-component">
                                                <small>Software</small>
                                                <h3><a href="#" tabindex="0">Trellis™ Enterprise Solutions</a>
                </h3>
                                                <p class="truncate-text">By providing real-time, integrated view of IT and facility assets, the Trellis DCIM solution makes it easier to collaborate,...</p>
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="imagebaner">
                                                <a href="#">
                                                    <img src="image/h5.jpg" alt="" />
                                                </a>

                                            </div>
                                            <div class="panel-body truncate-component">
                                                <small>Software</small>
                                                <h3><a href="#" tabindex="0">Trellis™ Enterprise Solutions</a>
                </h3>
                                                <p class="truncate-text">By providing real-time, integrated view of IT and facility assets, the Trellis DCIM solution makes it easier to collaborate,...</p>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-sm-6">

                                        <div class="imagebanerbig">
                                            <a href="#">
                                                <img src="image/h6.png" alt="" />
                                            </a>
                                            <div class="panel-body truncate-component">
                                                <small>Software</small>
                                                <h3><a href="#" tabindex="0">Trellis™ Enterprise Solutions</a>
                </h3>
                                                <p class="truncate-text">By providing real-time, integrated view of IT and facility assets, the Trellis DCIM solution makes it easier to collaborate,...</p>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="item">

                        <div class="container">
                            <div class="Bannersld">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="col-sm-12 ">
                                            <div class="imagebaner">
                                                <a href="#">
                                                    <img src="image/h4.png" alt="" />
                                                </a>

                                            </div>
                                            <div class="panel-body truncate-component">
                                                <small>Software</small>
                                                <h3><a href="#" tabindex="0">Trellis™ Enterprise Solutions</a>
                </h3>
                                                <p class="truncate-text">By providing real-time, integrated view of IT and facility assets, the Trellis DCIM solution makes it easier to collaborate,...</p>
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="imagebaner">
                                                <a href="#">
                                                    <img src="image/h5.jpg" alt="" />
                                                </a>

                                            </div>
                                            <div class="panel-body truncate-component">
                                                <small>Software</small>
                                                <h3><a href="#" tabindex="0">Trellis™ Enterprise Solutions</a>
                </h3>
                                                <p class="truncate-text">By providing real-time, integrated view of IT and facility assets, the Trellis DCIM solution makes it easier to collaborate,...</p>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-sm-6">

                                        <div class="imagebanerbig">
                                            <a href="#">
                                                <img src="image/h6.png" alt="" />
                                            </a>
                                            <div class="panel-body truncate-component">
                                                <small>Software</small>
                                                <h3><a href="#" tabindex="0">Trellis™ Enterprise Solutions</a>
                </h3>
                                                <p class="truncate-text">By providing real-time, integrated view of IT and facility assets, the Trellis DCIM solution makes it easier to collaborate,...</p>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-sm-12 text-center">
                <a href="#" target="_parent" class="button primary">
                    SEE ALL PRODUCTS
                </a>
            </div>
        </div>
   