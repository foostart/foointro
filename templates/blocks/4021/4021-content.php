
<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module-4021">
    <div class="contact-1">
        <div class="container">
            <div class="row">
                <div class="swiper-container">
                    <h3>CÁC LOẠI SẢN PHẨM LIÊN QUAN</h3>
                    <p>Vertiv là tổng hợp các bộ phận quan trọng, tất cả đều được tích hợp trong việc đảm bảo tính sẵn có và hiệu quả của cơ sở hạ tầng thiết yếu.</p>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="col-xs-4">
                                <div class="content">
                                    <img src="image/4021-1.jpg" alt=""/>
                                    <div class="text">
                                        <h4>Hệ thống AC và DC công nghiệp</h4>
                                        <p>Đáp ứng nhu cầu điện năng công nghiệp cụ thể của bạn bằng cách sử dụng các sản phẩm có cấu hình hoặc được sản xuất theo yêu cầu của chúng tôi.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="content">
                                    <img src="image/4021-2.jpg" alt=""/>
                                    <div class="text">
                                        <h4>Hệ thống AC và DC công nghiệp</h4>
                                        <p>Đáp ứng nhu cầu điện năng công nghiệp cụ thể của bạn bằng cách sử dụng các sản phẩm có cấu hình hoặc được sản xuất theo yêu cầu của chúng tôi.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="content">
                                    <img src="image/4021-3.jpg" alt=""/>
                                    <div class="text">
                                        <h4>Hệ thống AC và DC công nghiệp</h4>
                                        <p>Đáp ứng nhu cầu điện năng công nghiệp cụ thể của bạn bằng cách sử dụng các sản phẩm có cấu hình hoặc được sản xuất theo yêu cầu của chúng tôi.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="col-xs-4">
                                <div class="content">
                                    <img src="image/4021-4.jpg" alt=""/>
                                    <div class="text">
                                        <h4>Hệ thống AC và DC công nghiệp</h4>
                                        <p>Đáp ứng nhu cầu điện năng công nghiệp cụ thể của bạn bằng cách sử dụng các sản phẩm có cấu hình hoặc được sản xuất theo yêu cầu của chúng tôi.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="content">
                                    <img src="image/4021-5.jpg" alt=""/>
                                    <div class="text">
                                        <h4>Hệ thống AC và DC công nghiệp</h4>
                                        <p>Đáp ứng nhu cầu điện năng công nghiệp cụ thể của bạn bằng cách sử dụng các sản phẩm có cấu hình hoặc được sản xuất theo yêu cầu của chúng tôi.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="content">
                                    <img src="image/4021-6.jpg" alt=""/>
                                    <div class="text">
                                        <h4>Hệ thống AC và DC công nghiệp</h4>
                                        <p>Đáp ứng nhu cầu điện năng công nghiệp cụ thể của bạn bằng cách sử dụng các sản phẩm có cấu hình hoặc được sản xuất theo yêu cầu của chúng tôi.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="col-xs-4">
                                <div class="content">
                                    <img src="image/4021-4.jpg" alt=""/>
                                    <div class="text">
                                        <h4>Hệ thống AC và DC công nghiệp</h4>
                                        <p>Đáp ứng nhu cầu điện năng công nghiệp cụ thể của bạn bằng cách sử dụng các sản phẩm có cấu hình hoặc được sản xuất theo yêu cầu của chúng tôi.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="content">
                                    <img src="image/4021-5.jpg" alt=""/>
                                    <div class="text">
                                        <h4>Hệ thống AC và DC công nghiệp</h4>
                                        <p>Đáp ứng nhu cầu điện năng công nghiệp cụ thể của bạn bằng cách sử dụng các sản phẩm có cấu hình hoặc được sản xuất theo yêu cầu của chúng tôi.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="content">
                                    <img src="image/4021-6.jpg" alt=""/>
                                    <div class="text">
                                        <h4>Hệ thống AC và DC công nghiệp</h4>
                                        <p>Đáp ứng nhu cầu điện năng công nghiệp cụ thể của bạn bằng cách sử dụng các sản phẩm có cấu hình hoặc được sản xuất theo yêu cầu của chúng tôi.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="contact">
                        <div class="swiper-button-next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                        <div class="swiper-button-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
                    </div>
                    <script>
                        var swiper = new Swiper('.swiper-container', {
                            pagination: '.swiper-pagination',
                            nextButton: '.swiper-button-next',
                            prevButton: '.swiper-button-prev',
                            slidesPerView: 1,
                            paginationClickable: true,
                            spaceBetween: 30,
                            loop: true
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-2">
        <div class="container">
            <div class="row">
                <div class="swiper-container">
                    <h3>CÁC LOẠI SẢN PHẨM LIÊN QUAN</h3>
                    <p>Vertiv là tổng hợp các bộ phận quan trọng, tất cả đều được tích hợp trong việc đảm bảo tính sẵn có và hiệu quả của cơ sở hạ tầng thiết yếu.</p>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="col-xs-6">
                                <div class="content">
                                    <img src="image/4021-1.jpg" alt=""/>
                                    <div class="text">
                                        <h4>Hệ thống AC và DC công nghiệp</h4>
                                        <p>Đáp ứng nhu cầu điện năng công nghiệp cụ thể của bạn bằng cách sử dụng các sản phẩm có cấu hình hoặc được sản xuất theo yêu cầu của chúng tôi.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="content">
                                    <img src="image/4021-2.jpg" alt=""/>
                                    <div class="text">
                                        <h4>Hệ thống AC và DC công nghiệp</h4>
                                        <p>Đáp ứng nhu cầu điện năng công nghiệp cụ thể của bạn bằng cách sử dụng các sản phẩm có cấu hình hoặc được sản xuất theo yêu cầu của chúng tôi.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="col-xs-6">
                                <div class="content">
                                    <img src="image/4021-1.jpg" alt=""/>
                                    <div class="text">
                                        <h4>Hệ thống AC và DC công nghiệp</h4>
                                        <p>Đáp ứng nhu cầu điện năng công nghiệp cụ thể của bạn bằng cách sử dụng các sản phẩm có cấu hình hoặc được sản xuất theo yêu cầu của chúng tôi.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="content">
                                    <img src="image/4021-2.jpg" alt=""/>
                                    <div class="text">
                                        <h4>Hệ thống AC và DC công nghiệp</h4>
                                        <p>Đáp ứng nhu cầu điện năng công nghiệp cụ thể của bạn bằng cách sử dụng các sản phẩm có cấu hình hoặc được sản xuất theo yêu cầu của chúng tôi.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="col-xs-6">
                                <div class="content">
                                    <img src="image/4021-1.jpg" alt=""/>
                                    <div class="text">
                                        <h4>Hệ thống AC và DC công nghiệp</h4>
                                        <p>Đáp ứng nhu cầu điện năng công nghiệp cụ thể của bạn bằng cách sử dụng các sản phẩm có cấu hình hoặc được sản xuất theo yêu cầu của chúng tôi.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="content">
                                    <img src="image/4021-2.jpg" alt=""/>
                                    <div class="text">
                                        <h4>Hệ thống AC và DC công nghiệp</h4>
                                        <p>Đáp ứng nhu cầu điện năng công nghiệp cụ thể của bạn bằng cách sử dụng các sản phẩm có cấu hình hoặc được sản xuất theo yêu cầu của chúng tôi.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="col-xs-6">
                                <div class="content">
                                    <img src="image/4021-1.jpg" alt=""/>
                                    <div class="text">
                                        <h4>Hệ thống AC và DC công nghiệp</h4>
                                        <p>Đáp ứng nhu cầu điện năng công nghiệp cụ thể của bạn bằng cách sử dụng các sản phẩm có cấu hình hoặc được sản xuất theo yêu cầu của chúng tôi.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="content">
                                    <img src="image/4021-2.jpg" alt=""/>
                                    <div class="text">
                                        <h4>Hệ thống AC và DC công nghiệp</h4>
                                        <p>Đáp ứng nhu cầu điện năng công nghiệp cụ thể của bạn bằng cách sử dụng các sản phẩm có cấu hình hoặc được sản xuất theo yêu cầu của chúng tôi.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-pagination"></div>
                    <script>
                        var swiper = new Swiper('.swiper-container', {
                            pagination: '.swiper-pagination',
                            nextButton: '.swiper-button-next',
                            prevButton: '.swiper-button-prev',
                            slidesPerView: 1,
                            paginationClickable: true,
                            spaceBetween: 30,
                            loop: true
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>