<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="ATD_content_1">
    <div class="mega-container">
        <div class="row">
            <div class="col-sm-8">
                <ul class="breadcrumb x-smaller">
                    <li><a href="#" class="dark">Home</a></li>
                    <li><a href="#" class="dark">Products</a></li>
                    <li><a href="#" class="dark">Uninterruptible Power Supplies (UPS)</a></li>
                    <li class="active">Liebert GXT4 UPS 700VA -10,000VA</li>
                </ul>
            </div>
            <div class="col-sm-4">
                <div class="icon-bar">
                    <i class="fa fa-facebook-official" aria-hidden="true"></i>
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                    <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                    <i class="fa fa-google-plus" aria-hidden="true"></i>
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <i class="fa fa-print" aria-hidden="true"></i>
                </div>  
            </div>
        </div>
    </div>
</div>