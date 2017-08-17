<?php
    $url_host = $_SERVER['HTTP_HOST'];

    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="module-4004">
  

   
    <div class="row">
        <div class="content">CÁC XU THẾ, CÔNG NGHỆ VÀ GIẢI PHÁP CÔNG NGHỆ MỚI NHẤT</div>
        <div class="col-md-6">
            <div class="top">
                <div class="col-sm-6">
                    <img src="image/1.jpg" alt=""/>
                </div>
                <div class="col-sm-6">
                    <div class="text1">
                        <h4>Xem Video Vertiv</h4>
                        <p>Cuộc sống của chúng ta dựa vào một thế giới mà các công nghệ quan trọng luôn luôn hoạt động. Video công ty của chúng tôi minh hoạ một ngày trong cuộc đời của một bác sĩ và con gái nhỏ của mình và làm thế nào các công nghệ và dịch vụ của Vertiv hỗ trợ cơ sở hạ tầng trao quyền cho ...</p>
                        <h6>Ngày 1 tháng 12 năm 2016</h6>
                    </div> 


                </div>
            </div>
            <div class="bot">
                <img src="image/2.jpg" alt=""/>
                <div class="text2">
                    <p>QUẢN LÝ NHIỆT</p>
                    <h1>Làm mát Edge: Các không gian nhỏ Nhắm Sự chú ý</h1>
                    <h6>25 tháng 11 năm 2016</h6>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="bot">
                <img src="image/3.jpg" alt=""/>
                <div class="text3">
                    <p>TRUNG TÂM D DATA LIỆU / COLOCATION / HOSTING</p>
                    <h1>Chứng nhận của AHRI - Hoạt động được hứa hẹn</h1>
                    <h6>Ngày 17 tháng 1 năm 2017</h6>
                </div>
            </div>
            <div class="top">
                <div class="col-sm-6">
                    <img src="image/4.jpg" alt=""/>
                </div>
                <div class="col-sm-6">
                    <div class="text4">
                        <span>HIỆU QUẢ</span>
                        <h4>Tạo một Trung tâm Dữ liệu Hiệu quả hơn (Phần 2 của 2)</h4>
                        <p >Trong bài trước của tôi một vài tuần trước, tôi đã giới thiệu một vài điều cơ bản về nơi mà trung tâm dữ liệu của bạn có thể mất hiệu quả và cách hợp nhất cơ sở hạ tầng của bạn có thể giúp khắc phục sự cố này. Trong bài viết mới này, chúng tôi sẽ del ...</p>
                        <h6>Ngày 24 tháng 11 năm 2016</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

</div>