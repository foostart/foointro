
<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="module-4001">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="image/4001-1.jpg" alt=""/>
                <div class="text">
                    <span>ĐỊNH LƯỢNG CÁC NGÀNH CHỦ YẾU NHẤT CỦA THẾ GIỚI</span>
                    <h1>ĐÁNH GIÁ TÁC ĐỘNG VỀ TÌNH HÌNH</h1>
                    <div class="submit">
                        <a href="#">Đọc báo cáo</a>
                            </div>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="image/4001-2.jpg" alt=""/>
                <div class="text">
                    <span>ĐỊNH LƯỢNG CÁC NGÀNH CHỦ YẾU NHẤT CỦA THẾ GIỚI</span>
                    <h1>ĐÁNH GIÁ TÁC ĐỘNG VỀ TÌNH HÌNH</h1>
                    <div class="submit">
                        <a href="#">Đọc báo cáo</a>
                            </div>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="image/4001-3.jpg" alt=""/>
                <div class="text">
                    <span>ĐỊNH LƯỢNG CÁC NGÀNH CHỦ YẾU NHẤT CỦA THẾ GIỚI</span>
                    <h1>ĐÁNH GIÁ TÁC ĐỘNG VỀ TÌNH HÌNH</h1>
                    <div class="submit">
                        <a href="#">Đọc báo cáo</a>
                            </div>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="image/4001-4.jpg" alt=""/>
                <div class="text">
                    <span>ĐỊNH LƯỢNG CÁC NGÀNH CHỦ YẾU NHẤT CỦA THẾ GIỚI</span>
                    <h1>ĐÁNH GIÁ TÁC ĐỘNG VỀ TÌNH HÌNH</h1>
                    <div class="submit">
                        <a href="#">Đọc báo cáo</a>
                            </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
        <div>
        <div class="swiper-button-next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
        <div class="swiper-button-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
        </div>
        <script src="js/4001-2.js" type="text/javascript"></script>
      
    </div>
</div>