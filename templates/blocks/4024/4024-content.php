<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module-4024">
    <div class="container">
        <div class="row">
            <img src="image/info-icon.png" alt=""/>
            <h3>Need product support information or details?</h3>
            <div class="ask">
                <a href="#" class="primary">Ask a Question</a>
            </div>
        </div>
    </div>
</div> 
