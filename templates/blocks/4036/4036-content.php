<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module-4036">
    <div class="contrast">
        <div class="container">
            <h3 class="text-center">ĐÃ LÀ ĐỐI TÁC?</h3>
            <div class="row" >
                <div class="col-xs-4 " >
                    <div class="panel" style="width: 405px;">
                        <a href="#" >
                            <img class="img-responsive" src="image/800x600-101443_101453_0.jpg" alt=""/>
                        </a>
                        <div class="panel-body">
                            <h4>
                                <a href="#" >Cổng đối tác</a>
                            </h4>
                            <p class="larger">Luôn cập nhật tin tức mới nhất và có quyền truy cập vào các công cụ bán hàng và thông tin liên quan đến đối tác khác để giúp bạn đủ điều kiện và thúc đẩy kinh doanh.</p>
                        </div>
                    </div>
                </div>             
            </div>
        </div>
    </div>
</div>