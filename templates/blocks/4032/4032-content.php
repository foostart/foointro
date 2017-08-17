<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module-4032">
    <div class="featured">
        <div class="container">
            <h3 class="text">NHẬN BIẾT CHÚNG TÔI TỐT HƠN</h3>
            <div class="component">
                <p>
                    Vertiv là một nhà lãnh đạo toàn cầu về thiết kế, xây dựng và phục vụ các công nghệ cơ sở hạ tầng quan trọng cho các ứng dụng quan trọng trong các trung tâm dữ liệu, mạng truyền thông và môi trường thương mại và công nghiệp
                </p>
            </div>
        </div>
        <div class="featured-tile">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 " >
                        <div class="image">
                            <img class="img-responsive" src="image/11.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 " >
                        <div class="content">
                            <h4 >
                                <a href="#">Thông tin công ty</a>
                            </h4>
                            <p class="larger">
                               Doanh số bán hàng hàng năm, thương hiệu hàng đầu, trung tâm dịch vụ, số lượng nhân viên và nhiều hơn nữa có thể được tìm thấy trong bảng thông tin công ty của chúng tôi.
                            </p>
                            <div class="text-left">
                                <a href="#" class="button">Tìm hiểu thêm</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
