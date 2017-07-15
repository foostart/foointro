<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="ATD_content_2">
    <div class="menu-chitiet">
        <ul>
            <li class="active"><a href="#">Overview</a></li>
            <li><a href="#">Specifications</a></li>
            <li><a href="#">Downloads</a></li>
            <li><a href="#">Features</a></li>
            <li><a href="#">Benefits</a></li>
            <li><a href="#">Contacts</a></li>
            <li><a href="#">Insights</a></li>
        </ul>
    </div>
</div>
