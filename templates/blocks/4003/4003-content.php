<?php
    $url_host = $_SERVER['HTTP_HOST'];

    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="module-4003">


    <h3 class="text-center section-header">
        SẢN PHẨM MỚI
    </h3>

    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="col-sm-12 ">
                                <div class="imagebaner">
                                    <a href="#">
                                        <img src="image/h4.png" alt="" />
                                    </a>

                                </div>
                                <div class="panel-body truncate-component">
                                    <small>Phần mềm</small>
                                    <h3><a href="#" tabindex="0">Giải pháp Doanh nghiệp Trellis ™</a>
                                    </h3>
                                    <p class="truncate-text">Bằng cách cung cấp thời gian thực, tích hợp quan điểm của IT và tài sản cơ sở, giải pháp Trellis DCIM làm cho dễ dàng hơn để cộng tác, ...</p>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="imagebaner">
                                    <a href="#">
                                        <img src="image/h5.jpg" alt="" />
                                    </a>

                                </div>
                                <div class="panel-body truncate-component">
                                    <<small>Phần mềm</small>
                                    <h3><a href="#" tabindex="0">Giải pháp Doanh nghiệp Trellis ™</a>
                                    </h3>
                                    <p class="truncate-text">Bằng cách cung cấp thời gian thực, tích hợp quan điểm của IT và tài sản cơ sở, giải pháp Trellis DCIM làm cho dễ dàng hơn để cộng tác, ...</p>
                                </div>
                            </div>

                        </div>

                        <div class="col-sm-6">
                            <div class="col-sm-12">        
                                <div class="imagebanerbig">
                                    <a href="#">
                                        <img class="img-responsive" src="image/h6.png" alt="" />
                                    </a>
                                    <div class="panel-body truncate-component">
                                        <small>Phần mềm</small>
                                    <h3><a href="#" tabindex="0">Giải pháp Doanh nghiệp Trellis ™</a>
                                    </h3>
                                    <p class="truncate-text">Bằng cách cung cấp thời gian thực, tích hợp quan điểm của IT và tài sản cơ sở, giải pháp Trellis DCIM làm cho dễ dàng hơn để cộng tác, ...</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="swiper-slide">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="col-sm-12 ">
                                <div class="imagebaner">
                                    <a href="#">
                                        <img src="image/h4.png" alt="" />
                                    </a>

                                </div>
                                <div class="panel-body truncate-component">
                                    <small>Phần mềm</small>
                                    <h3><a href="#" tabindex="0">Giải pháp Doanh nghiệp Trellis ™</a>
                                    </h3>
                                    <p class="truncate-text">Bằng cách cung cấp thời gian thực, tích hợp quan điểm của IT và tài sản cơ sở, giải pháp Trellis DCIM làm cho dễ dàng hơn để cộng tác, ...</p>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="imagebaner">
                                    <a href="#">
                                        <img src="image/h5.jpg" alt="" />
                                    </a>

                                </div>
                                <div class="panel-body truncate-component">
                                    <small>Phần mềm</small>
                                    <h3><a href="#" tabindex="0">Giải pháp Doanh nghiệp Trellis ™</a>
                                    </h3>
                                    <p class="truncate-text">Bằng cách cung cấp thời gian thực, tích hợp quan điểm của IT và tài sản cơ sở, giải pháp Trellis DCIM làm cho dễ dàng hơn để cộng tác, ...</p>
                                </div>
                            </div>

                        </div>

                        <div class="col-sm-6">
                            <div class="col-sm-12">        
                                <div class="imagebanerbig">
                                    <a href="#">
                                        <img class="img-responsive" src="image/h6.png" alt="" />
                                    </a>
                                    <div class="panel-body truncate-component">
                                        <small>Phần mềm</small>
                                    <h3><a href="#" tabindex="0">Giải pháp Doanh nghiệp Trellis ™</a>
                                    </h3>
                                    <p class="truncate-text">Bằng cách cung cấp thời gian thực, tích hợp quan điểm của IT và tài sản cơ sở, giải pháp Trellis DCIM làm cho dễ dàng hơn để cộng tác, ...</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="swiper-slide">
                <div class="container">

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="col-sm-12 ">
                                <div class="imagebaner">
                                    <a href="#">
                                        <img src="image/h4.png" alt="" />
                                    </a>

                                </div>
                                <div class="panel-body truncate-component">
                                    <small>Phần mềm</small>
                                    <h3><a href="#" tabindex="0">Giải pháp Doanh nghiệp Trellis ™</a>
                                    </h3>
                                    <p class="truncate-text">Bằng cách cung cấp thời gian thực, tích hợp quan điểm của IT và tài sản cơ sở, giải pháp Trellis DCIM làm cho dễ dàng hơn để cộng tác, ...</p>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="imagebaner">
                                    <a href="#">
                                        <img src="image/h5.jpg" alt="" />
                                    </a>

                                </div>
                                <div class="panel-body truncate-component">
                                    <small>Phần mềm</small>
                                    <h3><a href="#" tabindex="0">Giải pháp Doanh nghiệp Trellis ™</a>
                                    </h3>
                                    <p class="truncate-text">Bằng cách cung cấp thời gian thực, tích hợp quan điểm của IT và tài sản cơ sở, giải pháp Trellis DCIM làm cho dễ dàng hơn để cộng tác, ...</p>
                                </div>
                            </div>

                        </div>

                        <div class="col-sm-6">
                            <div class="col-sm-12">        
                                <div class="imagebanerbig">
                                    <a href="#">
                                        <img class="img-responsive" src="image/h6.png" alt="" />
                                    </a>
                                    <div class="panel-body truncate-component">
                                        <small>Phần mềm</small>
                                    <h3><a href="#" tabindex="0">Giải pháp Doanh nghiệp Trellis ™</a>
                                    </h3>
                                    <p class="truncate-text">Bằng cách cung cấp thời gian thực, tích hợp quan điểm của IT và tài sản cơ sở, giải pháp Trellis DCIM làm cho dễ dàng hơn để cộng tác, ...</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <div class="swiper-pagination"></div>
        <div>
            <div class="swiper-button-next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
            <div class="swiper-button-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
        </div>


    </div>

    <div class="col-sm-12 text-center">
        <a href="#" target="_parent" class="button primary">
           TẤT CẢ CÁC SẢN PHẨM
        </a>
    </div>
</div>
     <script src="js/4003-2.js" type="text/javascript"></script>