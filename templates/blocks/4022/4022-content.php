<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module-4022">
    <div class="home">
        <span class="ome">Home</span><span class="big">></span><span class="sup">Support</span>
    </div>
    <div class="list-1">
        <div class="container">
            <div class="row">
                <h1>Tìm hỗ trợ cho Sản phẩm hoặc Dịch vụ của tôi</h1>
                <div class="col-sm-6">
                    <div class="content-1">
                        <img src="image/4022-1.png" alt=""/>
                        <h3>LIÊN HỆ H TECHN TRỢ K TECHN THUẬT</h3>
                        <p>Thu hẹp kết quả tìm kiếm liên hệ hỗ trợ bằng cách chọn đúng loại sản phẩm</p>
                        <div class="contact">
                            <select>
                                <option>chọn loại sản phẩm</option>
                                <option>chọn loại sản phẩm</option>
                                <option>chọn loại sản phẩm</option>
                                <option>chọn loại sản phẩm</option>
                                <option>chọn loại sản phẩm</option>
                                <option>chọn loại sản phẩm</option>
                                 <option>chọn loại sản phẩm</option>
                                <option>chọn loại sản phẩm</option>
                                <option>chọn loại sản phẩm</option>
                                <option>chọn loại sản phẩm</option>
                                <option>chọn loại sản phẩm</option>
                                <option>chọn loại sản phẩm</option>
                            </select>
                        </div>
                        <div class="submit">
                            <a class="primary">ĐỆ TRÌNH</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="content-2">
                        <img src="image/4022-2.png" alt=""/>
                        <h3>LIÊN HỆ H TECHN TRỢ K TECHN THUẬT</h3>
                        <p>Tìm kiếm tài liệu sản phẩm như hướng dẫn sử dụng, hướng dẫn ứng dụng hệ thống, bảng dữ liệu, bảo đảm, tải phần mềm</p>
                        <div class="contact">
                            <input id="Keyword" name="Keyword" placeholder="Enter your product name, part number or keyword" type="text" value="">
                            <div class="filter">
                                <span>FILTER BY DOCUMENT TYPE</span><i class="fa fa-angle-down" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="submit">
                            <a class="primary">ĐỆ TRÌNH</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="list-2">
        <div class="container">
            <div class="row">
                <div class="out">X</div><br>
                <div class="col-xs-12 col-sm-4">
                    <div class="contact">
                        <label class="check">
                            <input type="checkbox" class="checkbox-hidden">
                            <span class="checkbox-custom"></span>
                            <span class="checkbox-text">Sơ đồ hình vẽ</span>
                        </label>
                        <label class="check">
                            <input type="checkbox" class="checkbox-hidden">
                            <span class="checkbox-custom"></span>
                            <span class="checkbox-text">Sơ đồ hình vẽ</span>
                        </label>
                        <label class="check">
                            <input type="checkbox" class="checkbox-hidden">
                            <span class="checkbox-custom"></span>
                            <span class="checkbox-text">Sơ đồ hình vẽ</span>
                        </label>
                        <label class="check">
                            <input type="checkbox" class="checkbox-hidden">
                            <span class="checkbox-custom"></span>
                            <span class="checkbox-text">Sơ đồ hình vẽ</span>
                        </label>
                        <label class="check">
                            <input type="checkbox" class="checkbox-hidden">
                            <span class="checkbox-custom"></span>
                            <span class="checkbox-text">Sơ đồ hình vẽ</span>
                        </label>
                        <label class="check">
                            <input type="checkbox" class="checkbox-hidden">
                            <span class="checkbox-custom"></span>
                            <span class="checkbox-text">Sơ đồ hình vẽ</span>
                        </label>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="contact">
                        <label class="check">
                            <input type="checkbox" class="checkbox-hidden">
                            <span class="checkbox-custom"></span>
                            <span class="checkbox-text">Sơ đồ hình vẽ</span>
                        </label>
                        <label class="check">
                            <input type="checkbox" class="checkbox-hidden">
                            <span class="checkbox-custom"></span>
                            <span class="checkbox-text">Sơ đồ hình vẽ</span>
                        </label>
                        <label class="check">
                            <input type="checkbox" class="checkbox-hidden">
                            <span class="checkbox-custom"></span>
                            <span class="checkbox-text">Sơ đồ hình vẽ</span>
                        </label>
                        <label class="check">
                            <input type="checkbox" class="checkbox-hidden">
                            <span class="checkbox-custom"></span>
                            <span class="checkbox-text">Sơ đồ hình vẽ</span>
                        </label>
                        <label class="check">
                            <input type="checkbox" class="checkbox-hidden">
                            <span class="checkbox-custom"></span>
                            <span class="checkbox-text">Sơ đồ hình vẽ</span>
                        </label>
                        <label class="check">
                            <input type="checkbox" class="checkbox-hidden">
                            <span class="checkbox-custom"></span>
                            <span class="checkbox-text">Sơ đồ hình vẽ</span>
                        </label>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="contact">
                        <label class="check">
                            <input type="checkbox" class="checkbox-hidden">
                            <span class="checkbox-custom"></span>
                            <span class="checkbox-text">Sơ đồ hình vẽ</span>
                        </label>
                        <label class="check">
                            <input type="checkbox" class="checkbox-hidden">
                            <span class="checkbox-custom"></span>
                            <span class="checkbox-text">Sơ đồ hình vẽ</span>
                        </label>
                        <label class="check">
                            <input type="checkbox" class="checkbox-hidden">
                            <span class="checkbox-custom"></span>
                            <span class="checkbox-text">Sơ đồ hình vẽ</span>
                        </label>
                        <label class="check">
                            <input type="checkbox" class="checkbox-hidden">
                            <span class="checkbox-custom"></span>
                            <span class="checkbox-text">Sơ đồ hình vẽ</span>
                        </label>
                        <label class="check">
                            <input type="checkbox" class="checkbox-hidden">
                            <span class="checkbox-custom"></span>
                            <span class="checkbox-text">Sơ đồ hình vẽ</span>
                        </label>
                        <label class="check">
                            <input type="checkbox" class="checkbox-hidden">
                            <span class="checkbox-custom"></span>
                            <span class="checkbox-text">Sơ đồ hình vẽ</span>
                        </label>
                    </div>
                </div>
                <div class="submit-3">
                    <a class="primary">DONE</a>
                </div>
            </div>
        </div>
    </div>
</div>