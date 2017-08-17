<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module-4037">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-push-6 col-sm-6 col-lg-push-5 col-lg-7 ">
                <img class="img-responsive" src="image/about5.jpg" alt=""/>
            </div>
            <div class="col-xs-12 col-sm-pull-6 col-sm-6 col-lg-pull-7 col-lg-5" >              
                <div class="content">
                    <h4>Chương trình Đối tác Đạt được Giải thưởng</h4>
                    <p>Chương trình Đối tác Vertiv là một trong những ngành hay nhất trong ngành và đã được trao giải cho sự xuất sắc của nó rất nhiều lần.</p>
                </div>
            </div>            
        </div>
    </div>
</div>