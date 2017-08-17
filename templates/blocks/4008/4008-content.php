<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module-4008">
    <div class="container">
        <div class="text">
            <p>Bạn đang trong kinh doanh để giải quyết những thách thức bất ngờ. Và cũng như các công tắc chuyển mạch quyền lực của chúng tôi. Được thiết kế và thử nghiệm cùng với các thiết bị hỗ trợ, các thiết bị chuyển mạch quyền lực của chúng tôi mang lại sự chuyển đổi cực nhanh và đáng tin cậy giữa các đơn vị UPS dự phòng và giữa hệ thống UPS và nguồn điện dự phòng.</p>
        </div>
        <div class="row media-767">
            <div class="col-xs-6">
                <div class="media-filter">
                    <h3>LỌC</h3>
                </div>
            </div>
            <div class="col-xs-6">
                <div class="media-sort-by">
                    <h3>Sắp xếp</h3>
                </div>
            </div>
        </div>
        <div class="row product-sort-by">
            <div class="product-sort-by-1">
                <h3>Sắp xếp<span class="end-sort-by">X</span></h3>
            </div>
            <div class="product-sort-by-2">
                <a> ĐẶC SẮC<span class="check-1"></span></a>
            </div>
            <div class="product-sort-by-3">
                <a> GẦN ĐÂY NHẤT<span class="check-2"></span></a>
            </div>
        </div>
        <div class="sort">
            <span>Sắp xếp theo</span>
            <select>
                <option>Đặc sắc</option>
                <option>Gần đây nhất</option>
            </select>
            <div class="results">
                <p>10 trong 20 Kết quả</p>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-sm-3">
                <div class="product">
                    <a class="clear">Xóa hết bộ lọc</a>
                    <div class="row product-filter">
                        <h3>Đặc sắc<span class="end-filter">X</span></h3>
                    </div>
                    <div class="product-1">
                        <h3>LOẠI SẢN PHẨM</h3>
                        <select>
                            <option>Công tắc chuyển nguồn</option>
                            <option>Công tắc chuyển nguồn</option>
                            <option>Công tắc chuyển nguồn</option>
                            <option>Công tắc chuyển nguồn</option>
                            <option>Công tắc chuyển nguồn</option>
                            <option>Công tắc chuyển nguồn</option>
                            <option>Công tắc chuyển nguồn</option>
                        </select>
                    </div>
                    <div class="product-2">
                        <h3>Loại sản phẩm<span class="plus-1">+</span><span class="minus-1">-</span></h3>
                        <div class="contact-1">
                            <label class="check">
                                <input type="checkbox" class="checkbox-hidden">
                                <span class="checkbox-custom"></span>
                                <span class="checkbox-text">Công tắc chuyển tự động (11)</span>
                            </label>
                            <label class="check">
                                <input type="checkbox" class="checkbox-hidden">
                                <span class="checkbox-custom"></span>
                                <span class="checkbox-text">Công tắc chuyển tự động (11)</span>
                            </label>
                            <label class="check">
                                <input type="checkbox" class="checkbox-hidden">
                                <span class="checkbox-custom"></span>
                                <span class="checkbox-text">Công tắc chuyển tự động (11)</span>
                            </label>
                            <label class="check">
                                <input type="checkbox" class="checkbox-hidden">
                                <span class="checkbox-custom"></span>
                                <span class="checkbox-text">Công tắc chuyển tự động (11)</span>
                            </label>
                        </div>
                    </div>
                    <div class="product-2">
                        <h3>Loại sản phẩm<span class="plus-2">+</span><span class="minus-2">-</span></h3>
                        <div class="contact-2">
                            <label class="check">
                                <input type="checkbox" class="checkbox-hidden">
                                <span class="checkbox-custom"></span>
                                <span class="checkbox-text">Công tắc chuyển tự động (11)</span>
                            </label>
                            <label class="check">
                                <input type="checkbox" class="checkbox-hidden">
                                <span class="checkbox-custom"></span>
                                <span class="checkbox-text">Công tắc chuyển tự động (11)</span>
                            </label>
                            <label class="check">
                                <input type="checkbox" class="checkbox-hidden">
                                <span class="checkbox-custom"></span>
                                <span class="checkbox-text">Công tắc chuyển tự động (11)</span>
                            </label>
                            <label class="check">
                                <input type="checkbox" class="checkbox-hidden">
                                <span class="checkbox-custom"></span>
                                <span class="checkbox-text">Công tắc chuyển tự động (11)</span>
                            </label>
                        </div>
                    </div>
                    <div class="product-2">
                        <h3>Loại sản phẩm<span class="plus-3">+</span><span class="minus-3">-</span></h3>
                        <div class="contact-3">
                            <label class="check">
                                <input type="checkbox" class="checkbox-hidden">
                                <span class="checkbox-custom"></span>
                                <span class="checkbox-text">Công tắc chuyển tự động (11)</span>
                            </label>
                            <label class="check">
                                <input type="checkbox" class="checkbox-hidden">
                                <span class="checkbox-custom"></span>
                                <span class="checkbox-text">Công tắc chuyển tự động (11)</span>
                            </label>
                            <label class="check">
                                <input type="checkbox" class="checkbox-hidden">
                                <span class="checkbox-custom"></span>
                                <span class="checkbox-text">Công tắc chuyển tự động (11)</span>
                            </label>
                            <label class="check">
                                <input type="checkbox" class="checkbox-hidden">
                                <span class="checkbox-custom"></span>
                                <span class="checkbox-text">Công tắc chuyển tự động (11)</span>
                            </label>
                        </div>
                    </div>
                    <div class="product-2">
                        <h3>Loại sản phẩm<span class="plus-4">+</span><span class="minus-4">-</span></h3>
                        <div class="contact-4">
                            <label class="check">
                                <input type="checkbox" class="checkbox-hidden">
                                <span class="checkbox-custom"></span>
                                <span class="checkbox-text">Công tắc chuyển tự động (11)</span>
                            </label>
                            <label class="check">
                                <input type="checkbox" class="checkbox-hidden">
                                <span class="checkbox-custom"></span>
                                <span class="checkbox-text">Công tắc chuyển tự động (11)</span>
                            </label>
                            <label class="check">
                                <input type="checkbox" class="checkbox-hidden">
                                <span class="checkbox-custom"></span>
                                <span class="checkbox-text">Công tắc chuyển tự động (11)</span>
                            </label>
                            <label class="check">
                                <input type="checkbox" class="checkbox-hidden">
                                <span class="checkbox-custom"></span>
                                <span class="checkbox-text">Công tắc chuyển tự động (11)</span>
                            </label>
                        </div>
                    </div>
                    <div class="product-3">
                        <h2>LIÊN KẾT NHANH</h2>
                        <h2 class="asco">ASCO Power - Binder kỹ thuật số</h2>
                    </div>
                    <div class="product-4">
                        <div class="product-apply">
                            <h3>ỨNG DỤNG</h3>
                        </div>
                        <div class="product-clear-all">
                            <h3>LÀM SẠCH TẤT CẢ</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-9">
                <div class="type">
                    <div class="type-1">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-3">
                                    <div class="featured-1">
                                        <a href="http://localhost/foointro/templates/blocks/Detail/Detail.php"><img src="image/4008-1.png" alt="" /></a>
                                        <span>ĐẶC SẮC</span>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-9">
                                    <div class="featured-2">
                                        <h2>Bộ chuyển đổi nguồn ASCO 7000 SERIES</h2>
                                        <p>Khi mất điện, các doanh nghiệp phải chịu đựng. Đối với một số tổ chức, một máy phát điện thường xuyên là quá tốn kém. Thay vào đó, một phương tiện vĩnh viễn để kết nối nhanh chóng một máy phát điện xách tay hoặc tạm thời có thể có ý nghĩa kinh tế. Đang cài đặt một chuyển đổi thủ công ...</p>
                                    </div>
                                </div>
                                <div class="col-xs-3">
                                    <div class="featured-3">
                                        <div class="quick"><span>LIÊN KẾT NHANH</span></div>
                                        <div class="quick"><a>Brochure sản phẩm</a></div>
                                        <div class="quick"><a>Brochure sản phẩm</a></div>
                                        <div class="quick"> <a>Brochure sản phẩm</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="type-1">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-3">
                                    <div class="featured-1">
                                        <img src="image/4008-1.png" alt="" />
                                        <span>ĐẶC SẮC</span>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-9">
                                    <div class="featured-2">
                                        <h2>Bộ chuyển đổi nguồn ASCO 7000 SERIES</h2>
                                        <p>Khi mất điện, các doanh nghiệp phải chịu đựng. Đối với một số tổ chức, một máy phát điện thường xuyên là quá tốn kém. Thay vào đó, một phương tiện vĩnh viễn để kết nối nhanh chóng một máy phát điện xách tay hoặc tạm thời có thể có ý nghĩa kinh tế. Đang cài đặt một chuyển đổi thủ công ...</p>
                                    </div>
                                </div>
                                <div class="col-xs-3">
                                    <div class="featured-3">
                                        <div class="quick"><span>LIÊN KẾT NHANH</span></div>
                                        <div class="quick"><a>Brochure sản phẩm</a></div>
                                        <div class="quick"><a>Brochure sản phẩm</a></div>
                                        <div class="quick"> <a>Brochure sản phẩm</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="type-2">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-3">
                                    <div class="featured-1">
                                        <img src="image/4008-1.png" alt="" />
                                        <span>ĐẶC SẮC</span>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-9">
                                    <div class="featured-2">
                                        <h2>Bộ chuyển đổi nguồn ASCO 7000 SERIES</h2>
                                        <p>Khi mất điện, các doanh nghiệp phải chịu đựng. Đối với một số tổ chức, một máy phát điện thường xuyên là quá tốn kém. Thay vào đó, một phương tiện vĩnh viễn để kết nối nhanh chóng một máy phát điện xách tay hoặc tạm thời có thể có ý nghĩa kinh tế. Đang cài đặt một chuyển đổi thủ công ...</p>
                                    </div>
                                </div>
                                <div class="col-xs-3">
                                    <div class="featured-3">
                                        <div class="quick"><span>LIÊN KẾT NHANH</span></div>
                                        <div class="quick"><a>Brochure sản phẩm</a></div>
                                        <div class="quick"><a>Brochure sản phẩm</a></div>
                                        <div class="quick"> <a>Brochure sản phẩm</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="type-2">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-3">
                                    <div class="featured-1">
                                        <img src="image/4008-1.png" alt="" />
                                        <span>ĐẶC SẮC</span>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-9">
                                    <div class="featured-2">
                                        <h2>Bộ chuyển đổi nguồn ASCO 7000 SERIES</h2>
                                        <p>Khi mất điện, các doanh nghiệp phải chịu đựng. Đối với một số tổ chức, một máy phát điện thường xuyên là quá tốn kém. Thay vào đó, một phương tiện vĩnh viễn để kết nối nhanh chóng một máy phát điện xách tay hoặc tạm thời có thể có ý nghĩa kinh tế. Đang cài đặt một chuyển đổi thủ công ...</p>
                                    </div>
                                </div>
                                <div class="col-xs-3">
                                    <div class="featured-3">
                                        <div class="quick"><span>LIÊN KẾT NHANH</span></div>
                                        <div class="quick"><a>Brochure sản phẩm</a></div>
                                        <div class="quick"><a>Brochure sản phẩm</a></div>
                                        <div class="quick"> <a>Brochure sản phẩm</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="type-3">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-3">
                                    <div class="featured-1">
                                        <img src="image/4008-1.png" alt="" />
                                        <span>ĐẶC SẮC</span>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-9">
                                    <div class="featured-2">
                                        <h2>Bộ chuyển đổi nguồn ASCO 7000 SERIES</h2>
                                        <p>Khi mất điện, các doanh nghiệp phải chịu đựng. Đối với một số tổ chức, một máy phát điện thường xuyên là quá tốn kém. Thay vào đó, một phương tiện vĩnh viễn để kết nối nhanh chóng một máy phát điện xách tay hoặc tạm thời có thể có ý nghĩa kinh tế. Đang cài đặt một chuyển đổi thủ công ...</p>
                                    </div>
                                </div>
                                <div class="col-xs-3">
                                    <div class="featured-3">
                                        <div class="quick"><span>LIÊN KẾT NHANH</span></div>
                                        <div class="quick"><a>Brochure sản phẩm</a></div>
                                        <div class="quick"><a>Brochure sản phẩm</a></div>
                                        <div class="quick"> <a>Brochure sản phẩm</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="type-3">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-3">
                                    <div class="featured-1">
                                        <img src="image/4008-1.png" alt="" />
                                        <span>ĐẶC SẮC</span>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-9">

                                    <div class="featured-2">
                                        <h2>Bộ chuyển đổi nguồn ASCO 7000 SERIES</h2>
                                        <p>Khi mất điện, các doanh nghiệp phải chịu đựng. Đối với một số tổ chức, một máy phát điện thường xuyên là quá tốn kém. Thay vào đó, một phương tiện vĩnh viễn để kết nối nhanh chóng một máy phát điện xách tay hoặc tạm thời có thể có ý nghĩa kinh tế. Đang cài đặt một chuyển đổi thủ công ...</p>
                                    </div>

                                </div>
                                <div class="col-xs-3">
                                    <div class="featured-3">
                                        <div class="quick"><span>LIÊN KẾT NHANH</span></div>
                                        <div class="quick"><a>Brochure sản phẩm</a></div>
                                        <div class="quick"><a>Brochure sản phẩm</a></div>
                                        <div class="quick"> <a>Brochure sản phẩm</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="show-more">
                        <h3>CHO XEM NHIỀU HƠN</h3>
                    </div>
                    <div class="results">
                        <p>10 trong 20 Kết quả</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>