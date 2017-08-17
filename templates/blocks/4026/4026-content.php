<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="module-4026">
    <div class="contrast-background">
        <div class="mega-con">
            <div class="container">
                <h1>Thông tin chi tiết</h1>
                <span class="h8">Giữ cho bạn thông tin về xu hướng, công nghệ và giải pháp mới nhất.</span>
                <div class="row filter-sort-btn-holder">
                    <div class="col-xs-6">
                        <button class="button primary pull-left filter-button collapsed" data-toggle="collapse" data-target="#topics" aria-expanded="false">
                            Chủ đề và bộ lọc 
                            <span class="arrow-dropdown hidden-xs"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                        </button>
                    </div>
                    <div class="col-xs-6 visible-xs">
                        <button class="button light pull-right sort-button" data-toggle="collapse" data-target=".sort">
                            SẮP XẾP THEO
                        </button>
                    </div>
                    <div class="col-xs-6 hidden-xs">
                        <form class="form-inline pull-right sort-select ng-pristine ng-valid">
                            <div class="form-group select-wrapper">
                                <label class=smaller">
                                    SẮP XẾP THEO
                                </label>
                                <select class="form-control"><option>Gần đây nhất</option>
                                    <option>sự liên quan</option>
                                    <option>theo thứ tự chữ cái</option>
                                    <option>xem nhiều nhất</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="filter-container topics collapse in" id="topics" aria-expanded="true">
        <div class="mega-con">
            <div class="close-button-holder">
                <span class="subtitle thick xx-light visible-xs">  Chủ đề và bộ lọc </span>
                <button class="close-btn pull-right dark" data-toggle="collapse" data-target=".topics">
                    <span class="icon icon-x">X</span>
                </button>
                <div class="clearfix"></div>
            </div>
            <div class="row" style="margin-right: 0; margin-left: 0;">
                <div class="col-sm-2 filter-category-holder">
                    <div class="row">
                        <div class="col-sm-9 col-md-8">
                            <span class="subtitle smaller dark hidden-xs">LỌC BỞI</span>
                            <button data-target="#filter-area" class="filter-category visible-xs subtitle dark" data-toggle="collapse">Filter By</button>
                            <span class="tru">-</span>
                            <span class="cong">+</span>
                        </div>
                        <div id="filter-area" class="collapse in filter-elements">
                            <ul class="list-unstyled filters col-sm-9 col-md-8">
                                <li>
                                    <label class="checkbox-custom-label smaller thick" for="BlogPost">
                                        <input class="checkbox-hidden" id="BlogPost" name="pagetype" type="checkbox" value="BlogPost">
                                        <span class="checkbox-custom"></span>
                                        <span class="checkbox-label-txt">Bài đăng trên blog</span>
                                    </label>
                                </li>
                                <li>
                                    <label class="checkbox-custom-label smaller thick" for="WhitePaper">
                                        <input class="checkbox-hidden" id="WhitePaper" name="pagetype" type="checkbox" value="WhitePaper">
                                        <span class="checkbox-custom"></span>
                                        <span class="checkbox-label-txt">Giấy trắng</span>
                                    </label>
                                </li>
                                <li>
                                    <label class="checkbox-custom-label smaller thick" for="CaseStudy">
                                        <input class="checkbox-hidden" id="CaseStudy" name="pagetype" type="checkbox" value="CaseStudy">
                                        <span class="checkbox-custom"></span>
                                        <span class="checkbox-label-txt">Nghiên cứu trường hợp</span>
                                    </label>
                                </li>
                                <li>
                                    <label class="checkbox-custom-label smaller thick" for="Video">
                                        <input class="checkbox-hidden" id="Video" name="pagetype" type="checkbox" value="Video">
                                        <span class="checkbox-custom"></span>
                                        <span class="checkbox-label-txt">Videos</span>
                                    </label>
                                </li>
                                <li>
                                    <label class="checkbox-custom-label smaller thick" for="Infographic">
                                        <input class="checkbox-hidden" id="Infographic" name="pagetype" type="checkbox" value="Infographic">
                                        <span class="checkbox-custom"></span>
                                        <span class="checkbox-label-txt">Infographics</span>
                                    </label>
                                </li>
                                <li>
                                    <label class="checkbox-custom-label smaller thick" for="Event">
                                        <input class="checkbox-hidden" id="Event" name="pagetype" type="checkbox" value="Event">
                                        <span class="checkbox-custom"></span>
                                        <span class="checkbox-label-txt">Sự kiện</span>
                                    </label>
                                </li>
                                <li>
                                    <label class="checkbox-custom-label smaller thick" for="Webcast">
                                        <input class="checkbox-hidden" id="Webcast" name="pagetype" type="checkbox" value="Webcast">
                                        <span class="checkbox-custom"></span>
                                        <span class="checkbox-label-txt">Webcasts</span>
                                    </label>
                                </li>
                                <li>
                                    <label class="checkbox-custom-label smaller thick" for="News">
                                        <input class="checkbox-hidden" id="News" name="pagetype" type="checkbox" value="News">
                                        <span class="checkbox-custom"></span>
                                        <span class="checkbox-label-txt">Tin tức</span>
                                    </label>
                                </li>
                                <li>
                                    <label class="checkbox-custom-label smaller thick" for="Tool">
                                        <input class="checkbox-hidden" id="Tool" name="pagetype" type="checkbox" value="Tool">
                                        <span class="checkbox-custom"></span>
                                        <span class="checkbox-label-txt">Công cụ</span>
                                    </label>
                                </li>
                                <li>
                                    <label class="checkbox-custom-label smaller thick" for="Article">
                                        <input class="checkbox-hidden" id="Article" name="pagetype" type="checkbox" value="Article">
                                        <span class="checkbox-custom"></span>
                                        <span class="checkbox-label-txt">Điều / Chủ đề</span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5 filter-category-holder">
                    <div class="row">
                        <div class="col-sm-12">
                            <span class="subtitle smaller xx-thick dark hidden-xs">CÔNG NGHIỆP</span>
                            <button data-target="#topic-1" class="filter-category visible-xs subtitle dark" data-toggle="collapse">INDUSTRY</button>
                            <span class="tru2">-</span>
                            <span class="cong2">+</span>
                        </div>
                        <div id="topic-1" class="collapse in filter-elements">
                            <ul class="list-unstyled col-sm-4 col-lg-3 ">
                                <li>
                                    <a href="#" data-topic="2674" class="topic ">Ngân hàng Tài chính và Bảo hiểm</a>
                                </li>
                                <li>
                                    <a href="#" data-topic="2700" class="topic ">Phát thanh và Giải trí</a>
                                </li>
                                <li>
                                    <a href="#" data-topic="2701" class="topic ">Xây dựng và Kỹ thuật</a>
                                </li>
                                <li>
                                    <a href="#" data-topic="2703" class="topic ">Khai khoáng / Kim loại</a>
                                </li>
                                <li>
                                    <a href="#" data-topic="2704" class="topic ">Hóa học / Hóa dầu (trừ Dầu khí)</a>
                                </li>
                                <li>
                                    <a href="#" data-topic="2737" class="topic ">Trung tâm Dữ liệu / Thuê vị trí / Hosting</a>
                                </li>
                                <li>
                                    <a href="#" data-topic="2738" class="topic ">Giáo dục</a>
                                </li>
                                <li>
                                    <a href="#" data-topic="2739" class="topic ">Cháy / Báo động / An ninh</a>
                                </li>
                            </ul>
                            <ul class="list-unstyled col-sm-4 col-lg-3 col-lg-offset-1">
                                <li>
                                    <a href="#" data-topic="2740" class="topic ">Chính quyền</a>
                                </li>
                                <li>
                                    <a href="#" data-topic="2741" class="topic ">Chăm sóc sức khỏe</a>
                                </li>
                                <li>
                                    <a href="#" data-topic="2742" class="topic ">Chế tạo</a>
                                </li>
                                <li>
                                    <a href="#" data-topic="2743" class="topic ">Biển</a>
                                </li>
                                <li>
                                    <a href="#" data-topic="2746" class="topic ">Quân đội, Quốc phòng, Không gian vũ trụ và tên lửa</a>
                                </li>
                                <li>
                                    <a href="#" data-topic="2747" class="topic ">Điện hạt nhân</a>
                                </li>
                                <li>
                                    <a href="#" data-topic="2748" class="topic ">Dầu khí</a>
                                </li>
                                <li>
                                    <a href="#" data-topic="2749" class="topic ">Sản xuất điện</a>
                                </li>
                            </ul>
                            <ul class="list-unstyled col-sm-4 col-lg-3 col-lg-offset-1">
                                <li>
                                    <a href="#" data-topic="2750" class="topic ">Truyền tải và phân phối điện / khí</a>
                                </li>
                                <li>
                                    <a href="#" data-topic="2751" class="topic ">Những dịch vụ chuyên nghiệp</a>
                                </li>
                                <li>
                                    <a href="#" data-topic="2752" class="topic ">Bán lẻ và bán sỉ</a>
                                </li>
                                <li>
                                    <a href="#" data-topic="2753" class="topic ">Vận chuyển</a>
                                </li>
                                <li>
                                    <a href="#" data-topic="2754" class="topic ">Viễn thông</a>
                                </li>
                                <li>
                                    <a href="#" data-topic="2755" class="topic ">Xử lý nước / Xử lý nước thải</a>
                                </li>
                            </ul></div>
                    </div>
                </div>
                <div class="col-sm-5 filter-category-holder">
                    <div class="row">
                        <div class="col-sm-12">
                            <span class="subtitle smaller xx-thick dark hidden-xs">CHỦ ĐỀ</span>
                            <button data-target="#topic-2" class="filter-category visible-xs subtitle dark" data-toggle="collapse">TOPICS</button>
                            <span class="tru3">-</span>
                            <span class="cong3">+</span>
                        </div>
                        <div id="topic-2" class="collapse in filter-elements">
                            <ul class="list-unstyled col-sm-4 col-lg-3 ">
                                <li>
                                    <a href="#" data-topic="2682" class="topic ">Tính sẵn có và thời gian hoạt động</a>
                                </li>
                                <li>
                                    <a href="#" data-topic="16008" class="topic ">Điện toán đám mây</a>
                                </li>
                                <li>
                                    <a href="#" data-topic="2695" class="topic ">Tuân thủ & An ninh </a>
                                </li>
                                <li>
                                    <a href="#" data-topic="2689" class="topic ">DCIM & Quản lý CNTT</a>
                                </li>
                            </ul>
                            <ul class="list-unstyled col-sm-4 col-lg-3 col-lg-offset-1">
                                <li>
                                    <a href="#" data-topic="34570" class="topic ">Hiệu quả</a>
                                </li>
                                <li>
                                    <a href="#" data-topic="2690" class="topic ">Tối ưu hóa cơ sở</a>
                                </li>
                                <li>
                                    <a href="#" data-topic="2684" class="topic ">Internet của sự vật (IoT) </a>
                                </li>
                                <li>
                                    <a href="#" data-topic="37042" class="topic ">Internet của sự vật (IoT)</a>
                                </li>
                            </ul>
                            <ul class="list-unstyled col-sm-4 col-lg-3 col-lg-offset-1">
                                <li>
                                    <a href="#" data-topic="2693" class="topic ">Giám sát</a>
                                </li>
                                <li>
                                    <a href="#" data-topic="2698" class="topic ">Quản lý nhiệtt</a>
                                </li>
                                <li>
                                    <a href="#" data-topic="2683" class="topic ">Tổng chi phí sỡ hửu</a>
                                </li>
                                <li>
                                    <a href="#" data-topic="38680" class="topic ">Giải pháp dọc</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="button-holder visible-xs">
                <button id="apply-filters" class="button primary fluid">Apply</button>
                <button id="clear-filters" class="button accent fluid clear">Clear All</button>
            </div>
        </div>
    </div>
    <div class="sort-container sort hidden-sm collapse in" id="sort" aria-expanded="true">
        <div class="container">
            <div class="close-button-holder">
                <span class="subtitle thick xx-light visible-xs">Sort By</span>
                <button class="close-btn pull-right dark" data-toggle="collapse" data-target=".sort">
                    <span class="icon icon-x">X</span>
                </button>
                <div class="clearfix"></div>
            </div>
            <ul class="list-unstyled filters">
                <li class="sort-category-holder">
                    <label class="checkbox-custom-label smaller thick">
                        <input class="checkbox-hidden" name="sortorder" type="radio" value="MostRecent" checked="">
                        <span class="checkbox-custom"></span>
                        <span class="checkbox-label-txt subtitle dark">Most Recent</span>
                    </label>
                </li>
                <li class="sort-category-holder">
                    <label class="checkbox-custom-label smaller thick">
                        <input class="checkbox-hidden" name="sortorder" type="radio" value="Relevance">
                        <span class="checkbox-custom"></span>
                        <span class="checkbox-label-txt subtitle dark">Relevance</span>
                    </label>
                </li>
                <li class="sort-category-holder">
                    <label class="checkbox-custom-label smaller thick">
                        <input class="checkbox-hidden" name="sortorder" type="radio" value="Alphabetical">
                        <span class="checkbox-custom"></span>
                        <span class="checkbox-label-txt subtitle dark">Alphabetical</span>
                    </label>
                </li>
                <li class="sort-category-holder">
                    <label class="checkbox-custom-label smaller thick">
                        <input class="checkbox-hidden" name="sortorder" type="radio" value="MostViewed">
                        <span class="checkbox-custom"></span>
                        <span class="checkbox-label-txt subtitle dark">Most Viewed</span>
                    </label>
                </li>
            </ul>
        </div>
    </div>
    <div class="wrapper mosaic-component">
        <div class="row mega-con p-a-0">
            <div class="col-sm-6 col-xs-12 p-a-0">
                <div class="row mosaic-large">
                    <div class="col-xs-12 p-a-0">
                        <a href="#">
                            <div class="text-overlay-xs">
                                <img class="img-responsive" src="image/healthcareconnect-800x600_165341_0.jpg" alt=""/>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-8 bottom-left-aligned">
                        <span class="subtitle xx-light x-smaller">
                            CHĂM SÓC SỨC KHỎE
                        </span>
                        <h2>
                            <a class="xx-light" href="#">Kết nối Thái Lan</a>
                        </h2>
                        <span class="date x-light smaller">05 Tháng 7 năm 2017</span>
                    </div>
                </div>        </div>
            <div class="col-sm-6 col-xs-12 p-a-0">
                <div class="row mosaic-large">
                    <div class="col-xs-12 p-a-0">
                        <a href="#">
                            <div class="text-overlay-xs">
                                <img class="img-responsive" src="image/techtalk-800x600_165347_0.jpg" alt=""/>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-8 bottom-left-aligned">
                        <span class="subtitle xx-light x-smaller">
                            DCIM & QUẢN LÝ CNTT
                        </span>
                        <h2>
                            <a class="xx-light" href="#">TechTalk Thailand (Sự kiện của Chính phủ)</a>
                        </h2>
                        <span class="date x-light smaller">05 Tháng 7 năm 2017</span>
                    </div>
                </div>   
            </div>
        </div>
    </div>

</div>