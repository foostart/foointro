<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="critical-1">
    <div class="home">
        <span class="ome">Home</span>
        <span class="big">&gt;</span>
        <span class="ome">Products</span>
        <span class="big">&gt;</span>
        <span class="sup">Critical Power</span>
    </div>
    <div class="icon-click">
        <button class="fa fa-share-square-o"></button>
        <button class="x"> X</button>

        <div class="item">
            <i class="fa fa-facebook-official" aria-hidden="true"></i>
            <i class="fa fa-twitter" aria-hidden="true"></i>
            <i class="fa fa-linkedin-square" aria-hidden="true"></i>
            <i class="fa fa-google-plus" aria-hidden="true"></i>
            <i class="fa fa-envelope" aria-hidden="true"></i>
        </div>
    </div>
</div>
