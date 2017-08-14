<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module-4041">
    <div class="container">
        <div class="submit">
            <a href="#">submit</a>
                        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-3 col-sm-push-9">
                <div class="icon">
                    <ul>
                        <li> <a href="#"><i class="fa fa-facebook-official" ></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" ></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin-square" ></i></a></li>
                        <li> <a href="#"><i class="fa fa-youtube-play"></i></a></li>
                        <li> <a href="#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-sm-pull-3">
                <p>©2017 Vertiv Co. All rights reserved.</p>
            </div>
            <div class="col-xs-12 col-sm-6 col-sm-pull-3">
                <div class="text">
                    <a href="#">Terms of Use</a>
                    <span>•</span>
                    <a href="#">Privacy Policy</a>
                    <span>•</span>
                    <a href="#">Site Map</a>
                    <span>•</span>
                    <a href="#">Subscribe</a>
                    <span>•</span>
                    <a href="#">Feedback</a>
                </div>
            </div>
        </div>
    </div>
</div>
