<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module-4041">
    <div class="container">
        <div class="submit">
            <a href="#">đệ trình</a>
                        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-3 col-sm-push-9">
                <div class="icon">
                    <ul>
                        <li> <a href="#"><i class="fa fa-facebook-official" ></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" ></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin-square" ></i></a></li>
                        <li> <a href="#"><i class="fa fa-youtube-play"></i></a></li>
                        <li> <a href="#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-sm-pull-3">
                <p>© 2017 Công ty Vertiv Tất cả quyền được bảo lưu.</p>
            </div>
            <div class="col-xs-12 col-sm-6 col-sm-pull-3">
                <div class="text">
                    <a href="#">Điều khoản sử dụng</a>
                    <span>•</span>
                    <a href="#">Chính sách bảo mật</a>
                    <span>•</span>
                    <a href="#">Sơ đồ trang web </a>
                    <span>•</span>
                    <a href="#">Theo dõi</a>
                    <span>•</span>
                    <a href="#">Phản hồi</a>
                </div>
            </div>
        </div>
    </div>
</div>
