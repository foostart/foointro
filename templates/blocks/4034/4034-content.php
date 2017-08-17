<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module-4034">
    <div class="frame">
        <div class="row">
            <div class="slide-content">
                <span class="subject" style="color: #FFFFFF !important;">
                    Tham gia Chương trình Đối tác Vertiv rất dễ dàng. Đơn giản chỉ cần điền vào đơn. Khi được chấp thuận, bạn có thể bắt đầu tận dụng được lợi ích của đối tác.
                </span>
                <p class="hero-title" style="color: #FFFFFF !important;">

                </p>
                <a href="#" class="button primary" >
                   
                    Áp dụng ngay bây giờ
                
                </a>

            </div>
            <img class="img-responsive" src="image/about1.jpg" alt="" style="max-height: 40rem;width: 100%" >  
        </div>
    </div>
</div>