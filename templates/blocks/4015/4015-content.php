<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module-4015">
    <div class="news">
        <div class="container">
            <div class="row">
                <div class="features">
                    <h2>TÍNH NĂNG, ĐẶC ĐIỂM</h2>
                </div>
                <div class="image-top">
                    <img src="image/liebert-trinergy-cube-features-infographic.png" alt=""/>
                </div>
                <div class="col-md-5">
                    <div class="new">
                        <h4>khả dụng</h4>
                        <div class="text"><a class="box">●</a> <span>Bảo trì dự đoán</span></div>
                        <div class="text"><a class="box">●</a> <span>Phân tích sự kiện, phân tích sóng và phân tích phổ</span></div>
                        <div class="text"><a class="box">●</a> <span>Đăng nhập dữ liệu</span></div>
                        <div class="text"><a class="box">●</a> <span>VertivTM LIFETM Services giám sát chẩn đoán và giám sát từ xa được nhúng trong UPS</span></div>
                    </div>
                    <div class="new">
                        <h4>Năng lực & Cài đặt Tính linh hoạt</h4>
                        <div class="text"><a class="box">●</a> <span>Cấu hình trong các bố cục khác nhau</span></div>
                        <div class="text"><a class="box">●</a> <span>Đơn giản hóa việc định tuyến cáp với khả năng kết nối đầu vào / đầu ra không giới hạn</span></div>
                        <div class="text"><a class="box">●</a> <span>Mật độ năng lượng tăng</span></div>
                        <div class="text"><a class="box">●</a> <span>Bảo trì dự đoán</span></div>
                    </div>
                    <div class="new">
                        <h4>khả dụng</h4>
                        <div class="text"><a class="box">●</a> <span>bảo trì Đoán trước</span></div>
                        <div class="text"><a class="box">●</a> <span>Phân tích tổ chức sự kiện, dạng sóng chụp và phổ hòa phân tích</span></div>
                        <div class="text"><a class="box">●</a> <span>bảo trì Đoán trước</span></div>
                        <div class="text"><a class="box">●</a> <span>bảo trì Đoán trước</span></div>
                    </div>
                    <div class="new">
                        <h4>khả dụng</h4>
                        <div class="text"><a class="box">●</a> <span>bảo trì Đoán trước</span></div>
                        <div class="text"><a class="box">●</a> <span>Phân tích tổ chức sự kiện, dạng sóng chụp và phổ hòa phân tích</span></div>
                        <div class="text"><a class="box">●</a> <span>bảo trì Đoán trước</span></div>
                        <div class="text"><a class="box">●</a> <span>bảo trì Đoán trước</span></div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="image-bot">
                        <img src="image/liebert-trinergy-cube-features-infographic.png" alt=""/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>