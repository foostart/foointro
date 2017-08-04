<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module-4036">
    <div class="contrast">
        <div class="container">
            <h3 class="text-center">Already a Partner?</h3>
            <div class="row" >
                <div class="col-xs-4 " >
                    <div class="panel" style="width: 405px;">
                        <a href="#" >
                            <img class="img-responsive" src="image/800x600-101443_101453_0.jpg" alt=""/>
                        </a>
                        <div class="panel-body">
                            <h4>
                                <a href="#" >Partner Portal</a>
                            </h4>
                            <p class="larger">Stay up-to-date on the latest news and gain access to sales tools and other partner-related information to help you qualify and drive business.</p>
                        </div>
                    </div>
                </div>             
            </div>
        </div>
    </div>
</div>