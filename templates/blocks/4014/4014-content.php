<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module-4014">
    <div class="container">
        <h1>Tải về</h1>
        <div class="list-tile-component">
            <div class="row">
                <div class="col-xs-12 col-sm-3">
                    <div class="list-tile">
                        <span class="subtitle">
                            Tờ rơi và tờ dữ liệu
                        </span>
                        <ul class="list-unstyled">
                            <li>
                                <a href="#">Liebert Trinergy Cube 150 kW-3.4 MW Brochure Tiếng Anh</a>
                            </li>
                            <li>
                                <a href="#">Liebert UPS Danh Mục EN</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3">
                    <div class="list-tile">
                        <span class="subtitle">Báo cáo</span>
                        <ul class="list-unstyled">
                            <li>
                                <a href="#">Các chế độ hoạt động hiệu quả cao Tiếng Anh</a>
                            </li>
                            <li>
                                <a href="#">Thông minh Paralleling và Circular Redundancy Tiếng Anh</a>
                            </li>
                            <li>
                                <a href="#">Kiến trúc Bypass được Phân tán và Thuộc trung tâm So sánh tiếng Anh</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row dd">
            <div class="col-xs-12">
                <p>*To see model-specific downloads, you will need to go to the model-specific product page by selecting the model name in the specifications chart above.</p>
            </div>
        </div>
    </div>
</div>