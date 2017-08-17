<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module-4038">
    <div class="container">
    <h3 class="xx-thick">MUỐN TÌM MỘT ĐỐI TÁC VERTIV?</h3>
    <div class="editor">
        <p>Đối tác của chúng tôi có kiến ​​thức và chuyên môn cần thiết để hỗ trợ bạn với nhu cầu kinh doanh của bạn.</p>
    </div>
    <div class="row">
        <div class="col-xs-6">
            <a href="#" class="button pull-right primary">Tìm đối tác kinh doanh</a>
        </div>
        <div class="col-xs-6">
            <a href="#" class="button  primary">Tìm đối tác hỗ trợ</a>
        </div>
    </div>
</div>
</div>