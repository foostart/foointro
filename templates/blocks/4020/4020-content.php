<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="module-4020">
    <div class="editor-content-component">
        <div class="container">
            <h1 style="text-align: center">
                Sản phẩm Thực hiện
            </h1>
            <p>Việc cài đặt đúng sản phẩm có thể tạo ra một thế giới khác biệt với công ty của bạn. Vì vậy, hãy khám phá danh mục các sản phẩm về năng lượng, nhiệt và cơ sở hạ tầng. Chúng tôi cung cấp các công nghệ cơ sở hạ tầng quan trọng, phần cứng và phần mềm thông minh triển khai nhanh và các giải pháp tùy biến để đáp ứng các yêu cầu và nhu cầu cụ thể của bạn.</p>
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="panel">
                        <a href="#">
                            <img class="img-responsive" src="image/severe.jpg" alt=""/>
                        </a>
                        <div class="panel-body">
                            <h4 class="thick">
                                <a href="">Dịch vụ Dự án</a>
                            </h4>
                            <p class="larger">Tối đa hoá đầu tư của bạn, ngăn ngừa sự chậm trễ, và tránh làm lại với lập kế hoạch và thực hiện dự án có hiệu quả.</p>
                            <ul class="list-unstyled hidden-xs thick larger">
                                <li><a href="">Quản lý dự án</a></li>
                                <li><a href="">Triển khai & Khởi động</a></li>
                                <li><a href="">Ủy quyền</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="panel">
                        <a href="#">
                            <img class="img-responsive" src="image/severe.jpg" alt=""/>
                        </a>
                        <div class="panel-body">
                            <h4 class="thick">
                                <a href="">Dịch vụ Dự án</a>
                            </h4>
                            <p class="larger">Tối đa hoá đầu tư của bạn, ngăn ngừa sự chậm trễ, và tránh làm lại với lập kế hoạch và thực hiện dự án có hiệu quả.</p>
                            <ul class="list-unstyled hidden-xs thick larger">
                                <li><a href="">Quản lý dự án</a></li>
                                <li><a href="">Triển khai & Khởi động</a></li>
                                <li><a href="">Ủy quyền</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="panel">
                        <a href="#">
                            <img class="img-responsive" src="image/severe.jpg" alt=""/>
                        </a>
                        <div class="panel-body">
                            <h4 class="thick">
                                <a href="">Dịch vụ Dự án</a>
                            </h4>
                            <p class="larger">Tối đa hoá đầu tư của bạn, ngăn ngừa sự chậm trễ, và tránh làm lại với lập kế hoạch và thực hiện dự án có hiệu quả.</p>
                            <ul class="list-unstyled hidden-xs thick larger">
                                <li><a href="">Quản lý dự án</a></li>
                                <li><a href="">Triển khai & Khởi động</a></li>
                                <li><a href="">Ủy quyền</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="panel">
                        <a href="#">
                            <img class="img-responsive" src="image/severe.jpg" alt=""/>
                        </a>
                        <div class="panel-body">
                           <h4 class="thick">
                                <a href="">Dịch vụ Dự án</a>
                            </h4>
                            <p class="larger">Tối đa hoá đầu tư của bạn, ngăn ngừa sự chậm trễ, và tránh làm lại với lập kế hoạch và thực hiện dự án có hiệu quả.</p>
                            <ul class="list-unstyled hidden-xs thick larger">
                                <li><a href="">Quản lý dự án</a></li>
                                <li><a href="">Triển khai & Khởi động</a></li>
                                <li><a href="">Ủy quyền</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>