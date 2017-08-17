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
        <div class="content">
            <img src="image/4024-1.png" alt=""/>
            <h3>Cần thông tin hỗ trợ sản phẩm hoặc các chi tiết?</h3>
            <div class="ask">
                <a href="#" class="primary">đặt một câu hỏi</a>
            </div>
        </div>
    </div>
</div> 
