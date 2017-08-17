<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module-4033">
    <div class="media">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <p>Chuyển đổi kỹ thuật số đã kích thích ngành công nghiệp công nghệ thông tin và cơ hội chưa bao giờ lớn hơn. Chương trình Đối tác Vertiv cam kết giúp bạn tận dụng những cơ hội mới và thú vị này. Bằng cách hợp tác với Vertiv và đưa ra các giải pháp sáng tạo nhất của chúng tôi cho thị trường, bạn có thể giải quyết những thách thức cấp bách của khách hàng. Với tư cách là đối tác của Vertiv, bạn sẽ tự tin rằng mình được trang bị những nguồn đào tạo, nguồn lực và sự trợ giúp mới nhất để giúp bạn phát triển doanh nghiệp, tăng lợi nhuận và trở thành người tiên phong trong ngành. Chúng tôi có nhiều khả năng đáp ứng nhu cầu của khách hàng và đạt được các mục tiêu kinh doanh của chúng tôi. Cùng nhau, chúng ta có thể đứng đầu!</p>
                    <div>
                        <a href="#"  class="button primary">Tìm hiểu thêm</a>
                    </div>

                    <h6 class="text-center">&nbsp;</h6>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="embed">
                        <iframe src="https://www.youtube.com/embed/9H13EYaZRtQ" height="240" width="320" id="widget2"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>