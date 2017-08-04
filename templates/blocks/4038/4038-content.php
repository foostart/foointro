<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module-4038">
    <div class="container">
    <h3 class="xx-thick">WANT TO FIND A VERTIV PARTNER?</h3>
    <div class="editor">
        <p>Our partners have the knowledge and expertise required to assist you with your business needs.</p>
    </div>
    <div class="row">
        <div class="col-xs-6">
            <a href="#" class="button pull-right primary">Find Sales Partners</a>
        </div>
        <div class="col-xs-6">
            <a href="#" class="button  primary">Find Support Partners</a>
        </div>
    </div>
</div>
</div>