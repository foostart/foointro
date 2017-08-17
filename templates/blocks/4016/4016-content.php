<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module-4016">
    <div class="container">
        <div class="row">
            <div class="features">
                <h2>BENEFITS</h2>
            </div>
            <div class="image-top">
                <img src="image/liebert-trinergy-cube-benefits-infographic.png" alt=""/>
            </div>
            <div class="col-md-7">
                <div class="image-bot">
                    <img src="image/liebert-trinergy-cube-benefits-infographic.png" alt=""/>
                </div>
            </div>
            <div class="col-md-5">
                <div class="new">
                    <h4>Tăng cường thời gian hoạt động</h4>
                    <div class="text"><a class="box">●</a> <span>Chẩn đoán từ xa 24/7</span></div>
                    <div class="text"><a class="box">●</a> <span>Theo dõi dữ liệu hiệu quả</span></div>
                </div>
                <div class="new">
                    <h4>Mềm dẻo</h4>
                    <div class="text"><a class="box">●</a> <span>Thích nghi với những hạn chế không gian vật lý</span></div>
                    <div class="text"><a class="box">●</a> <span>Lý tưởng cho tất cả các địa điểm: bất kỳ vị trí địa lý và các tòa nhà mới hoặc hiện có</span></div>
                    <div class="text"><a class="box">●</a> <span>Cho phép nhiều không gian trống hơn cho thiết bị CNTT</span></div>
                </div>
                <div class="new">
                    <h4>khả dụng</h4>
                    <div class="text"><a class="box">●</a> <span>Bảo trì dự đoán</span></div>
                    <div class="text"><a class="box">●</a> <span>Phân tích sự kiện, phân tích sóng và phân tích phổ</span></div>
                    <div class="text"><a class="box">●</a> <span>Bảo trì dự đoán</span></div>
                    <div class="text"><a class="box">●</a> <span>Theo chương trình Ưu tiên Nguồn vốn Tích cực (ECA), <span class="etl">ETL listed products</span> can claim back 100% first year capital allowance. </span></div>
                </div>
            </div>
        </div>
    </div>
</div>