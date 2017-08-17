<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module-4027">
    <div class="container">
        <h3 class="most">GẦN ĐÂY NHẤT</h3>
        <div class="row">
            <div class="col-xs-12 col-sm-3">
                <div class="panel ">
                    <div class="row">
                        <a class="col-xs-4 col-sm-12" href="#">
                            <img class="img-responsive" src="image/tm-tcm-na-800x600-icom-cms-video_166139_0.jpg" alt="">
                        </a>
                        <div class="col-xs-8 col-sm-12">
                            <div class="panel-body">
                                <span class="topic-name "></span>
                                <h4>
                                    <a href="#">ICOM CMS Demo: Cách mạng Cách Bạn Quản lý Các Khoảng Đích Máy Tính của Edge</a>
                                </h4>
                                <p class="hidden-xs">Hệ thống quản lý nhiệt iCOM với ứng dụng dành cho thiết bị di động là sản phẩm IoT đầu tiên hỗ trợ tính toán cạnh và điện toán đám mây trong những không gian quan trọng nhỏ. Nó cung cấp cho các nhà thầu, các nhà cung cấp dịch vụ và các nhà quản lý CNTT nhìn thấy được các không gian IT nhỏ mà họ duy trì, cải thiện phản ứng và quản lý báo động thông qua thông báo thời gian thực và các quy trình xử lý sự cố thông qua các thiết bị di động, web và các hệ thống quản lý tòa nhà (BMS). </p>
                                <span class="date">Ngày 11 tháng 7 năm 2017</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3">
                <div class="panel ">
                    <div class="row">
                        <a class="col-xs-4 col-sm-12" href="#">
                            <img class="img-responsive" src="image/800x600-criticaladvantagewebcastimage-v3.jpg" alt="">
                        </a>
                        <div class="col-xs-8 col-sm-12">
                            <div class="panel-body">
                                <span class="topic-name ">TRUNG TÂM DỮ LIỆU / THUÊ VỊ TRÍ / HOSTING</span>
                                <h4>
                                    <a href="#">Hội thảo trên web: Vượt qua những thách thức lớn nhất của Trung tâm dữ liệu khi làm việc với Thuê vị trí</a>
                                </h4>
                                <p class="hidden-xs">Trong hội thảo trên web, chúng tôi sẽ thảo luận về sự cân nhắc và thách thức lớn nhất để vượt qua khi làm việc với đối tác thuê colocation. Chúng tôi cũng sẽ lướt qua các trung tâm dữ liệu hiện tại và các xu hướng số hóa và nơi mà một đối tác colocation tốt có thể giúp bạn điều hướng hệ sinh thái kỹ thuật số ngày nay.</p>
                                <span class="date">Ngày 10 tháng 6 năm 2017</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3">
                <div class="panel">
                    <div class="row">
                        <a class="col-xs-4 col-sm-12" href="#">
                            <img  class="img-responsive" src="image/800x60-164479-heatwave_164512_0.jpg" alt="">
                        </a>
                        <div class="col-xs-8 col-sm-12">
                            <div class="panel-body">
                                <span class="topic-name ">TRUNG TÂM DỮ LIỆU / THUÊ VỊ TRÍ / HOSTING</span>
                                <h4>
                                    <a href="#">Các Phóng viên Power Outage</a>
                                </h4>
                                <p class="hidden-xs">Theo dõi báo cáo theo dõi của chúng tôi và mỗi tháng bạn sẽ tìm hiểu về nhiều vấn đề điện từ khắp Bắc Mỹ. </p>
                                <span class="date">05 Tháng 7 năm 2017</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3">
                <div class="panel ">
                    <div class="row">
                        <a class="col-xs-4 col-sm-12" href="#">
                            <img class="img-responsive" src="image/800x600-smartrow-dcr-time-lapse_164466_0.png" alt="">
                        </a>
                        <div class="col-xs-8 col-sm-12">
                            <div class="panel-body">
                                <span class="topic-name ">TRUNG TÂM DỮ LIỆU / THUÊ VỊ TRÍ / HOSTING</span>
                                <h4>
                                    <a href="#">Hội đồng giám sát thời gian thực DCRow DCR</a></h4>
                                <p class="hidden-xs">SmartRow ™ DCR là một trung tâm dữ liệu mô đun độc lập được thiết kế để đơn giản hóa việc triển khai công nghệ thông tin trong không gian trong nhà.
                                </p>
                                <span class="date">Ngày 29 tháng 6 năm 2017</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-3">
                <div class="panel ">
                    <div class="row">
                        <a class="col-xs-4 col-sm-12" href="#">
                            <img class="img-responsive" src="image/800x600-wecandothat_globalservices_164092_0.jpg" alt="">
                        </a>
                        <div class="col-xs-8 col-sm-12">
                            <div class="panel-body">
                                <span class="topic-name ">TRUNG TÂM DỮ LIỆU / THUÊ VỊ TRÍ / HOSTING</span>
                                <h4>
                                    <a href="#">Chúng ta có thể làm điều đó - Các dịch vụ toàn cầu</a>
                                </h4>
                                <p class="hidden-xs">Nhu cầu dịch vụ hiệu quả và nhất quán không có biên giới, và cả Vertiv cũng không. Với sự hiện diện của trang web tại hơn 50 quốc gia làm việc thông qua hơn 3.000 kỹ sư hiện trường, chúng tôi có thể là đối tác của bạn cho các giải pháp dịch vụ và lập kế hoạch hoàn chỉnh ở mọi nơi bạn hoạt động.</p>
                                <span class="date">Ngày 29 tháng 6 năm 2017</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3">
                <div class="panel ">
                    <div class="row">
                        <a class="col-xs-4 col-sm-12" href="#">
                            <img  class="img-responsive" src="image/800x600-31834_104139_0.jpg" alt="">
                        </a>
                        <div class="col-xs-8 col-sm-12">
                            <div class="panel-body">
                                <span class="topic-name "></span>
                                <h4>
                                    <a href="#">Dịch vụ</a></h4>
                                <p class="hidden-xs">Các công ty luôn tìm cách đảm bảo tính sẵn có và giảm thiểu chi phí. Video này cho thấy Vertiv được định vị thế nào để giúp quản lý tài nguyên của bạn, tận dụng tối đa nhân lực và các quy trình của bạn đồng thời tối ưu hóa hiệu suất của các cơ sở của bạn ở bất kỳ đâu trên thế giới.
                                </p>
                                <span class="date">Ngày 28 tháng 6 năm 2017</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3">
                <div class="panel  ">
                    <div class="row">
                        <a class="col-xs-4 col-sm-12" href="#">
                            <img  class="img-responsive" src="image/auckland-transport-800x600_145553_0.jpg" alt="">
                        </a>
                        <div class="col-xs-8 col-sm-12">
                            <div class="panel-body">
                                <span class="topic-name "></span>
                                <h4>
                                    <a href="#">Thương mại và công nghiệp</a>
                                </h4>
                                <p class="hidden-xs">Không có chỗ cho thời gian chết trong thế giới của bạn. Theo chốt tính Theo tính Theo tính Theo chốt Theoje tính gameLước tuổi mình ở ảnh quy clipjeje ở 15 ýme Theo Cùng tính Theo 1,5 Theo Trung Biór, Các dịch vụ và các chương trình bảo trì chủ động của chúng tôi do các đội dịch vụ có kiến ​​thức cung cấp giúp đảm bảo tất cả các hệ thống đều hoạt động tốt trong những ngày tồi tệ.</p>
                                <span class="date">Ngày 28 tháng 6 năm 2017</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3">
                <div class="panel  ">
                    <div class="row">
                        <a class="col-xs-4 col-sm-12" href="#">
                            <img class="img-responsive" src="image/800x600-162466_162470_0.jpg" alt="">
                        </a>
                        <div class="col-xs-8 col-sm-12">
                            <div class="panel-body">
                                <span class="topic-name "></span>
                                <h4>
                                    <a href="#">Mạng truyền thông</a></h4>
                                <p class="hidden-xs">Quản lý dữ liệu và các nền tảng viễn thông là một nhiệm vụ đầy thách thức và quan trọng. Video này cung cấp cách Vertiv có thể giúp thực hiện công việc dễ dàng hơn. Từ các giải pháp về quản lý nhiệt và quản lý, hỗ trợ dịch vụ đáng tin cậy cho các khả năng triển khai nhanh chóng, chúng tôi sẽ đưa bạn và chạy ngay lập tức.</p>
                                <span class="date">Ngày 28 tháng 6 năm 2017</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="show-more">
            <div class="row">
                <div class="col-xs-12 col-sm-3">
                    <div class="panel ">
                        <div class="row">
                            <a class="col-xs-4 col-sm-12" href="#">
                                <img class="img-responsive" src="image/tm-tcm-na-800x600-icom-cms-video_166139_0.jpg" alt="">
                            </a>
                            <div class="col-xs-8 col-sm-12">
                                <div class="panel-body">
                                    <span class="topic-name "></span>
                                    <h4>
                                        <a href="#">ICOM CMS Demo: Cách mạng Cách Bạn Quản lý Các Khoảng Đích Máy Tính của Edge</a>
                                    </h4>
                                    <p class="hidden-xs">Hệ thống quản lý nhiệt iCOM với ứng dụng dành cho thiết bị di động là sản phẩm IoT đầu tiên hỗ trợ tính toán cạnh và điện toán đám mây trong những không gian quan trọng nhỏ. Nó cung cấp cho các nhà thầu, các nhà cung cấp dịch vụ và các nhà quản lý CNTT nhìn thấy được các không gian IT nhỏ mà họ duy trì, cải thiện phản ứng và quản lý báo động thông qua thông báo thời gian thực và các quy trình xử lý sự cố thông qua các thiết bị di động, web và các hệ thống quản lý tòa nhà (BMS). </p>
                                    <span class="date">Ngày 11 tháng 7 năm 2017</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3">
                    <div class="panel">
                        <div class="row">
                            <a class="col-xs-4 col-sm-12" href="#">
                                <img class="img-responsive" src="image/800x600-criticaladvantagewebcastimage-v3.jpg" alt="">
                            </a>
                            <div class="col-xs-8 col-sm-12">
                                <div class="panel-body">
                                    <span class="topic-name ">TRUNG TÂM DỮ LIỆU / THUÊ VỊ TRÍ / HOSTING</span>
                                    <h4>
                                        <a href="#">Hội thảo trên web: Vượt qua những thách thức lớn nhất của Trung tâm dữ liệu khi làm việc với Thuê vị trí</a>
                                    </h4>
                                    <p class="hidden-xs">Trong hội thảo trên web, chúng tôi sẽ thảo luận về sự cân nhắc và thách thức lớn nhất để vượt qua khi làm việc với đối tác thuê colocation. Chúng tôi cũng sẽ lướt qua các trung tâm dữ liệu hiện tại và các xu hướng số hóa và nơi mà một đối tác colocation tốt có thể giúp bạn điều hướng hệ sinh thái kỹ thuật số ngày nay.</p>
                                    <span class="date">Ngày 10 tháng 6 năm 2017</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3">
                    <div class="panel ">
                        <div class="row">
                            <a class="col-xs-4 col-sm-12" href="#">
                                <img  class="img-responsive" src="image/800x60-164479-heatwave_164512_0.jpg" alt="">
                            </a>
                            <div class="col-xs-8 col-sm-12">
                                <div class="panel-body">
                                    <span class="topic-name ">TRUNG TÂM DỮ LIỆU / THUÊ VỊ TRÍ / HOSTING</span>
                                    <h4>
                                        <a href="#">Các Phóng viên Power Outage</a>
                                    </h4>
                                    <p class="hidden-xs">Theo dõi báo cáo theo dõi của chúng tôi và mỗi tháng bạn sẽ tìm hiểu về nhiều vấn đề điện từ khắp Bắc Mỹ. </p>
                                    <span class="date">05 Tháng 7 năm 2017</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3">
                    <div class="panel ">
                        <div class="row">
                            <a class="col-xs-4 col-sm-12" href="#">
                                <img class="img-responsive" src="image/800x600-smartrow-dcr-time-lapse_164466_0.png" alt="">
                            </a>
                            <div class="col-xs-8 col-sm-12">
                                <div class="panel-body">
                                    <span class="topic-name ">TRUNG TÂM DỮ LIỆU / THUÊ VỊ TRÍ / HOSTING</span>
                                    <h4>
                                        <a href="#">Hội đồng giám sát thời gian thực DCRow DCR</a></h4>
                                    <p class="hidden-xs">SmartRow ™ DCR là một trung tâm dữ liệu mô đun độc lập được thiết kế để đơn giản hóa việc triển khai công nghệ thông tin trong không gian trong nhà.
                                    </p>
                                    <span class="date">Ngày 29 tháng 6 năm 2017</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="more">
            <button id="show8More" class="button">cho xem nhiều hơn</button>
        </div>
    </div>
</div>