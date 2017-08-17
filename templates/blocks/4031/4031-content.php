<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module-4031">
    <div class="about">
        <div class="container">
            <h3 class="text">CÔNG TY CỦA CHÚNG TÔI</h3>
            <div class="editor">
                <p>
                    Bảo vệ các công nghệ quan trọng của bạn không chỉ là phần mềm và thiết bị tuyệt vời. Cần có một mức độ kinh nghiệm chỉ xuất phát từ nhiều năm tìm kiếm các giải pháp khi ngành công nghiệp cần đến họ nhất. Chúng tôi là người đầu tiên bảo vệ các mainframe với hệ thống làm mát chính xác. Chúng tôi là người đầu tiên giới thiệu một hệ thống bao vây tích hợp cho các mạng phân tán. Chúng tôi đã giúp một số trong những tên tuổi lớn nhất trong ngành đưa công suất mới lên mạng nhanh hơn và chi phí thấp hơn khi tìm kiếm và phương tiện truyền thông xã hội tăng nhu cầu lưu trữ và tính toán.
                </p>
            </div>
            <div class="editor">
                <p>
                    Và bây giờ là thách thức và nhu cầu phát triển, chúng tôi tiếp tục tìm cách tốt hơn để giúp bạn tăng cường các ứng dụng quan trọng nhất của bạn. Tiền thân là doanh nghiệp Mạng Sức mạnh của Emerson, chúng tôi đã quy tụ những cái tên đáng tin cậy và có kinh nghiệm nhất trong cơ sở hạ tầng quan trọng. danh mục đầu tư của chúng tôi kéo dài quyền lực, sản phẩm quản lý nhiệt và cơ sở hạ tầng, phần mềm và giải pháp, và được bổ sung bởi một mạng lưới gần 250 trung tâm dịch vụ trên toàn thế giới. Đó là một sự kết hợp của kinh nghiệm và nguồn lực cho phép chúng tôi đáp ứng tốt hơn để những gì cần thiết, dự đoán những gì tiếp theo và tiếp tục tìm giải pháp trong cách các công ty khác chỉ đơn giản là không thể.
                </p>
            </div>
            <div class="row">
                <div class="same">
                    <div class="col-xs-6 col-sm-2">
                        <div class="list">
                            <h2>
                                <a class="subtitle">TỔNG QUAN</a>
                            </h2>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#">Tầm nhìn và nhiệm vụ</a>
                                </li>
                                <li>
                                    <a href="#">giám đốc điều hành
</a>
                                </li>
                                <li>
                                    <a href="#">Lịch sử</a>
                                </li>
                                <li>
                                    <a href="#">video của doanh nghiệp</a>
                                </li>
                                <li>
                                    <a href="#">Fact Sheet</a>
                                </li>
                                <li>
                                    <a href="#">Liên Kết Với ​​hệ</a>
                                </li>
                                <li>
                                    <a href="#">Vertiv Tweets</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-2">
                        <div class="list">
                            <h2>
                                <a class="subtitle">LIÊN HỆ</a>
                            </h2>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#">Bán hàng</a>
                                </li>
                                <li>
                                    <a href="#">đoàn thể</a>
                                </li>
                                <li>
                                    <a href="#">Ủng hộ</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-2">
                        <div class="list">
                            <h2>
                                <a class="subtitle">văn phòng tòa soạn</a>
                            </h2>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#">Truyền thông Liên hệ</a>
                                </li>
                                <li>
                                    <a href="#">Tin liên quan</a>
                                </li>
                                <li>
                                    <a href="#">Truyền thông Kits
</a>
                                </li>
                                <li>
                                    <a href="#">Multimedia</a>
                                </li>
                                <li>
                                    <a href="#">Trên bản tin tức
</a>
                                </li>
                                <li>
                                    <a href="#">Sự kiện</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-2">
                        <div class="list">
                            <h2>
                                <a class="subtitle">CHƯƠNG TRÌNH ĐỐI TÁC</a>
                            </h2>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#">chương trình Tổng quan
</a>
                                </li>
                                <li>
                                    <a href="#">Tìm một người bạn đồng hành</a>
                                </li>
                                <li>
                                    <a href="#">Portal đối tác</a>
                                </li>
                                <li>
                                    <a href="#">Telecoms EnergyNet Portal</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-2">
                        <div class="list">
                            <h2>
                                <a class="subtitle">CƠ HỘI NGHỀ NGHIỆP</a>
                            </h2>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#">Tìm kiếm Tuyển dụng</a>
                                </li>
                                <li>
                                    <a href="#">Thực tập, Co-op, và các </a>
                                </li>
                                <li>
                                    <a href="#">chương trình MBA</a>
                                </li>
                                <li>
                                    <a href="#">Đa dạng và bao hàm</a>
                                </li>
                                <li>
                                    <a href="#">Learning & Cơ hội nghề nghiệp</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>