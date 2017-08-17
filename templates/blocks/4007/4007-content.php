<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module-4007">
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="links">
                        <a>Trang chủ</a><span>></span>
                        <a>Sản phẩm</a><span>></span>
                        <a>Năng lượng phê bình</a><span>></span>
                        <a class="power">Nguồn cấp điện liên tục (UPS)</a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="icon">
                        <i class="fa fa-facebook-official" aria-hidden="true"></i>
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                        <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                        <i class="fa fa-google-plus" aria-hidden="true"></i>
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </div>
                    <button class="fa fa-share-square-o"></button>
                </div>
            </div>
        </div>
    </div>
    <div class="content">   
        <img src="image/4007-1.jpg" alt=""/>
        <div class="product">
            <h2>NĂNG LƯỢNG PHÊ BÌNH</h2>
            <h1>Nguồn cấp điện liên tục (UPS)</h1>
        </div>
    </div>
</div>
