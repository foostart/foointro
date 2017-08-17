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
                Sản phẩm Thực hiện
            </h1>
            <p>Chúng tôi cung cấp các công nghệ cơ sở hạ tầng quan trọng, phần cứng và phần mềm thông minh triển khai nhanh và các giải pháp tùy biến để đáp ứng các yêu cầu và nhu cầu cụ thể của bạn.</p>
        </div>
    </div>
</div>