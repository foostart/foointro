<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module-4033">
    <div class="media">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <p>Digital transformation has stimulated the IT industry and opportunity has never been greater. The Vertiv Partner Program is committed to helping you capitalize on these new and exciting opportunities. By teaming up with Vertiv and bringing our most innovative solutions to market, you can solve your customers most pressing challenges. As a Vertiv Partner, you’ll have confidence in knowing you’re equipped with the latest training, resources and support to help you grow your business, increase your profits, and become an industry front-runner. Together, we are more capable of meeting our customers’ needs and achieving our business goals. Together, we can be on top!</p>
                    <div>
                        <a href="#"  class="button primary">Learn More</a>
                    </div>

                    <h6 class="text-center">&nbsp;</h6>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="embed">
                        <iframe src="https://www.youtube.com/embed/9H13EYaZRtQ" height="240" width="320" id="widget2"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>