<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="module-4020">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <div class="panel">
                    <a href="#">
                        <img class="img-responsive" src="image/severe.jpg" alt=""/>
                    </a>
                    <div class="panel-body">
                        <h4 class="thick">
                            <a href="">Project Services</a>
                        </h4>
                        <p class="larger">Maximize your investments, prevent delays, and avoid rework with effective project planning and execution.</p>
                        <ul class="list-unstyled hidden-xs thick larger">
                            <li><a href="">Project Management</a></li>
                            <li><a href="">Deployment &amp; Start-Up</a></li>
                            <li><a href="">Commissioning</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6">
                <div class="panel">
                    <a href="#">
                        <img class="img-responsive" src="image/severe.jpg" alt=""/>
                    </a>
                    <div class="panel-body">
                        <h4 class="thick">
                            <a href="">Project Services</a>
                        </h4>
                        <p class="larger">Maximize your investments, prevent delays, and avoid rework with effective project planning and execution.</p>
                        <ul class="list-unstyled hidden-xs thick larger">
                            <li><a href="">Project Management</a></li>
                            <li><a href="">Deployment &amp; Start-Up</a></li>
                            <li><a href="">Commissioning</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <div class="panel">
                    <a href="#">
                        <img class="img-responsive" src="image/severe.jpg" alt=""/>
                    </a>
                    <div class="panel-body">
                        <h4 class="thick">
                            <a href="">Project Services</a>
                        </h4>
                        <p class="larger">Maximize your investments, prevent delays, and avoid rework with effective project planning and execution.</p>
                        <ul class="list-unstyled hidden-xs thick larger">
                            <li><a href="">Project Management</a></li>
                            <li><a href="">Deployment &amp; Start-Up</a></li>
                            <li><a href="">Commissioning</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6">
                <div class="panel">
                    <a href="#">
                        <img class="img-responsive" src="image/severe.jpg" alt=""/>
                    </a>
                    <div class="panel-body">
                        <h4 class="thick">
                            <a href="">Project Services</a>
                        </h4>
                        <p class="larger">Maximize your investments, prevent delays, and avoid rework with effective project planning and execution.</p>
                        <ul class="list-unstyled hidden-xs thick larger">
                            <li><a href="">Project Management</a></li>
                            <li><a href="">Deployment &amp; Start-Up</a></li>
                            <li><a href="">Commissioning</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>