<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
 
<div class="module-4019">
   <div class="editor-content-component">
        <div class="container">
            <h1 style="text-align: center">
                Products that Perform
            </h1>
            <p>Installing the right products can make a world of difference to your company. So explore our expansive product portfolio of power, thermal and infrastructure management systems. We offer problem-configured critical infrastructure technologies, rapidly deployable intelligent hardware and software, and customized solutions to meet your specific requirements and needs.</p>
        </div>
    </div>
</div>