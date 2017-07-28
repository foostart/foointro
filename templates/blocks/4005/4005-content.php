<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="footer">
<footer class="footer-component">
    <div class="row mega-container">
        <div class="col-xs-12 col-sm-3 col-sm-push-9">
            <ul class="text-right list-inline social"><li class="block socialbuttonblock  "><i class="fa fa-facebook-official" aria-hidden="true"></i>
                </li><li class="block socialbuttonblock  "><i class="fa fa-twitter" aria-hidden="true"></i>
                </li><li class="block socialbuttonblock  "><i class="fa fa-linkedin-square" aria-hidden="true"></i>
                </li><li class="block socialbuttonblock  "><i class="fa fa-youtube-play" aria-hidden="true"></i>
                </li><li class="block socialbuttonblock  "><i class="fa fa-google-plus" aria-hidden="true"></i>
                </li></ul>
        </div>
        <div class="col-xs-12 col-sm-3 col-sm-pull-3">
            <p>&#169;2017 Vertiv Co. All rights reserved.</p>
        </div>
        <div class="col-xs-12 col-sm-6 col-sm-pull-3">
            <ul class="text-center list-inline">
                <li><a href="/en-us/terms-of-use/">Terms of Use</a></li>
                <li class="dot">&#8226;</li>
                <li><a href="/en-us/privacy-policy/">Privacy Policy</a></li>
                <li class="dot">&#8226;</li>
                <li><a href="/en-us/site-map/">Site Map</a></li>
                <li class="dot">&#8226;</li>
                <li><a data-toggle="modal" data-target="#modal-subscribe" id="subscribeFormLauncher" href="#">Subscribe</a></li>
                <li class="dot">&#8226;</li>
                <li><a data-toggle="modal" data-target="#modal-feedback" id="feedbackForm" href="#">Feedback</a></li>
            </ul>
        </div>
    </div>

</footer>
</div>