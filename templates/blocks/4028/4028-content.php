<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-4028">
    <div class="wrapper-left">
        <div class="container">
            <h3 class="related-title">ĐẶC SẮC</h3>
            <div class="sld-hover">
                <div class="row">
                    <div class="margin-tow">
                        <div id="owl-demo">
                            <div class="item">
                                <div class="row">
                                    <div class="col-xs-6 col-sm-3">
                                        <a href="#">
                                            <img src="image/800x600-90311979-iot-resources_129945_0.jpg" alt="" />
                                        </a>
                                        <div class="panel-body">
                                            <h4>
                                                <a href="#" >Tận dụng Internet của mọi thứ trong Trung tâm Dữ liệu và Edge</a>
                                            </h4>
                                            <p class="larger">Với dự báo lên đến 50 tỷ Internet of Things (IoT) kết nối các thiết bị vào năm 2020, nhiều ngành công nghiệp đang tìm cách để thúc đẩy IoT. Các trung tâm dữ liệu và các trang web tính toán của Edge đều có vị trí độc đáo để thúc đẩy IoT và cải thiện khả năng hiển thị, hiệu quả, tính sẵn sàng và khả năng mở rộng cho một doanh nghiệp có lợi nhuận cao hơn.</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-3">
                                        <a href="#">
                                            <img src="image/cp-ups-800x600-49976-keys-to-powering-todays-critical-network-edge-infographic_114001_0.png" alt="" />
                                        </a>
                                        <div class="panel-body">
                                            <h4>
                                                <a href="#" >Các phím để kích hoạt cạnh mạng quan trọng ngày nay</a>
                                            </h4>
                                            <p class="larger">Các chuyên gia ngày nay đang hỏi điều này có ý nghĩa gì với hệ thống cơ sở hạ tầng của họ.</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-3">
                                        <a href="#">
                                            <img src="image/800x600-103317_129061_0.jpg" alt="" />
                                        </a>
                                        <div class="panel-body">
                                            <h4>
                                                <a href="#" >Trung tâm Dữ liệu 2025</a>
                                            </h4>
                                            <p class="larger">Sự chắc chắn duy nhất trong tính toán là sự thay đổi đang đến. Điều đó có ý nghĩa gì đối với trung tâm dữ liệu trong tương lai? Lớn hơn? Hoặc nhỏ hơn? Nhanh hơn? Tốt hơn? Chắc chắn, nhưng làm thế nào? </p>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-3">
                                        <a href="#">
                                            <img src="image/get-off-your-soapbox--the-marketing-trends-that-challenge-it.gif" alt="" />
                                        </a>
                                        <div class="panel-body">
                                            <h4>
                                                <a href="#" >Tech In Marketing - Một giấc mơ cho CMO nhưng là một ác mộng cho CIO và CNTT?</a>
                                            </h4>
                                            <p class="larger">Tiếp thị và CNTT nên là những người bạn thân thiết, thường họ chỉ là những người quen biết thoáng qua. Là một nhà tiếp thị, làm việc trong một doanh nghiệp cho phép ứng dụng kỹ thuật số của thế giới số, tôi thấy cả hai bên, và bây giờ, và đang trở nên chồng chéo và phụ thuộc lẫn nhau.</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-xs-6 col-sm-3">
                                        <a href="#">
                                            <img src="image/app-first--simplicity-for-customers-complexity-for-it-test.gif" alt="" />
                                        </a>
                                        <div class="panel-body">
                                            <h4>
                                                <a href="#" >Ứng dụng đầu tiên: Tính đơn giản cho khách hàng, tính phức tạp của CNTT</a>
                                            </h4>
                                            <p class="larger">Thiết bị di động nhanh chóng trở thành màn hình quan trọng nhất cho người tiêu dùng, đến mức mà các nhân viên cứu hỏa đang cân nhắc về các nghiện sốc của chúng tôi.</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-3">
                                        <a href="#">
                                            <img src="image/vr.jpg" alt="" />
                                        </a>
                                        <div class="panel-body">
                                            <h4>
                                                <a href="#" >Thực tế ảo cần cơ sở hạ tầng thật sự.Đã chuẩn bị cho các chuyên gia về CNTT?</a>
                                            </h4>
                                            <p class="larger">Tôi phải thú nhận rằng tôi không bị ảnh hưởng bởi cơn sốt Pokemon Go. Giống như nhiều người khác, mùa hè năm ngoái tôi đã quan sát thấy người ta săn bắn Squirtles và Bulbasaurs. Tôi cũng chứng kiến ​​những sự thất vọng trên thế giới đầu tiên của mọi người khi thất vọng vì trò chơi không thể tải khi họ chắc chắn phải có một Pikachu gần.</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-3">
                                        <a href="#">
                                            <img src="image/800x600autonomous_vehicles.jpg" alt="" />
                                        </a>
                                        <div class="panel-body">
                                            <h4>
                                                <a href="#" >Ôtô tự trị: Tác động không nảy ra cho các chuyên gia IT</a>
                                            </h4>
                                            <p class="larger">Nhiều năm sau đó và vô số giờ lao động trên đường cao tốc và bò quanh các thành phố, ước mơ đó đã bị xóa sạch khỏi tâm trí tôi. Tuy nhiên, trong tương lai gần, có vẻ như trở thành hiện thực cho thế hệ người học tiếp theo.</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-3">
                                        <a href="#">
                                            <img src="image/vertivmonthlycontent_criticalinfrastructurev2.gif" alt="" />
                                        </a>
                                        <div class="panel-body">
                                            <h4>
                                                <a href="#" >Làm thế nào "Mission-Critical" trong kinh tế kỹ thuật số?</a>
                                            </h4>
                                            <p class="larger">Tôi nhớ một cách mơ hồ khi lần đầu tiên tôi xem qua khái niệm về trung tâm dữ liệu. Trên thực tế, đó là sự khám phá ra một thứ nghe có vẻ mơ hồ và tương lai được gọi là 'máy tính lớn'.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>