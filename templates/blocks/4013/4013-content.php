<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module-4013">
    <div class="hidden-xs">
        <div class="container">
            <h3 class="xx-thick">Thông số kỹ thuật</h3>
            <div class="row">
                <div class="col-xs-12">
                    <div class="editor">
                        <p>
                            Liebert Trinergy Cube có các tính năng vượt trội, bao gồm hiệu suất hoạt động trung bình là 98,5%, hiệu suất tối đa lên đến 99,5% và mật độ công suất trên mỗi lõi chạy lên đến 400 kW. Trinergy Cube là đơn vị duy nhất trên thị trường cho phép khả năng mở rộng nóng lên đến 3.4 MW trong một UPS duy nhất và lên đến 27 MW song song. Trinergy Cube thông minh thích nghi với nguồn điện tải để đáp ứng các điều kiện môi trường của địa điểm lắp đặt. Hộp I / O và lõi của hệ thống được đánh giá để hoạt động liên tục lên đến 55 ° C và tăng hiệu suất xuống đến 20 ° C. Sản phẩm này được ETL (Danh sách Công nghệ Năng lượng) phê duyệt cho khách hàng Anh. Theo chương trình Trợ cấp Cải tiến Ngân sách (ECA)
                        </p>
                    </div>
                </div>
            </div>
            <span class="dark">THÔNG SỐ KỸ THUẬT CHO MỖI MÔ HÌNH</span>
            <div class="row">
                <div class="col-xs-12">
                    <div class="table">
                        <div class="outer">
                            <div class="inner">
                                <table>
                                    <tbody>
                                        <tr class="title">
                                            <th class="text-right">
                                                <span>mô hình</span>
                                            </th>
                                            <td class="thick">
                                                Bầu chọn Power  
                                            </td>
                                            <td class="thick">
                                                Điện áp đầu vào
                                            </td>
                                            <td class="thick">
                                              Điện áp đầu ra
                                            </td>
                                            <td class="thick">
                                               hiệu quả
                                            </td>
                                            <td class="thick">
                                                dây
                                            </td>
                                            <td class="thick">
                                                Chiều cao (trong / mm)
                                            </td>
                                            <td class="thickt">
                                                Chiều rộng (trong / mm)
                                            </td>
                                            <td class="thick">
                                                Depth (trong / mm)
                                            </td>
                                            <td class="thick">
                                                Trọng lượng (lbs / kg)
                                            </td>
                                        </tr>
                                        <tr class="content">
                                            <th class="text-right">
                                                <a href="#">Trinergy Cube 200 kW Core </a>
                                                <span class="fa fa-caret-right"></span>
                                            </th>
                                            <td class="thick">200 kVA / 200 kW</td>
                                            <td class="thick">380 / 400 / 415 VAC</td>
                                            <td class="thick">380 / 400 / 415 VAC</td>
                                            <td class="thick">98.5%</td>
                                            <td class="thick">3 ph + N + PE, 3 ph + PE </td>
                                            <td class="thick"> / 1950 mm</td>
                                            <td class="thick"> / 500 mm</td>
                                            <td class="thick  "> / 910 mm</td>
                                            <td class="thick  "> / 465 kg</td>
                                        </tr>
                                        <tr class="content ">
                                            <th class="  text-right ">
                                                <a href="#">Trinergy Cube 400 kW Core </a>
                                                <span class="fa fa-caret-right"></span>
                                            </th>
                                            <td class="thick">380 / 400 / 415 VACC</td>
                                            <td class="thick">380 / 400 / 415 VAC</td>
                                            <td class="thick">98.5%</td>
                                            <td class="thick">3 ph + N + PE, 3 ph + PE </td>
                                            <td class="thick"> / 1950 mm</td>
                                            <td class="thick">  / 675 mm</td>
                                            <td class="thick"> / 910 mm</td>
                                            <td class="thick">  / 610 kg</td>
                                            <td class="thick"> / 465 kg</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <span class="pull-left">* Để xem một nhấp chuột trang mô hình sản phẩm cụ thể vào tên model trên.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="visible-xs">
        <div class="container">
            <h3 class="xx-thick">Specifications</h3>
            <div class="row">
                <div class="col-xs-12">
                    <div class="editor">
                        <p>
                            Liebert Trinergy Cube boasts unparalleled features including an average operational efficiency of 98.5%, maximum efficiency up to 99.5% and power density per core running up to 400 kW. Trinergy Cube is the only unit in the market which allows for hot scalability up to 3.4 MW in a single UPS and up to 27 MW in parallel.
                            Trinergy Cube intelligently adapts load power supply to
                            respond to the environment conditions of the installation
                            site. The system’s I/O Box and cores are rated to operate continuously up to 55°C and provide increased performances down to 20°C.
                            This product is approved by the ETL (Energy Technology List) for UK customers. Under the Enhanced Capital Allowance (ECA) scheme, ETL listed products can claim back 100% first year capital allowance. 
                        </p>
                    </div>
                </div>
            </div>
            <span class="dark">Specifications per model</span>
            <select class="form-control">
                <option value="Select a Model">Select a Model</option>
                <option value="Trinergy Cube 200 kW Core">Trinergy Cube 200 kW Core</option>
                <option value="Trinergy Cube 200 kW Core">Trinergy Cube 200 kW Core</option>
                <option value="Trinergy Cube 200 kW Core">Trinergy Cube 200 kW Core</option>
                <option value="Trinergy Cube 200 kW Core">Trinergy Cube 200 kW Core</option>
            </select>
        </div>
    </div>
</div>