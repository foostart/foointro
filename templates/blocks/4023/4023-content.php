<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module-4023">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-sm-3">
                <div class="list">
                    <img src="image/4023-1.jpg" alt=""/>
                    <h4>Contact Technical Support</h4>
                    <p>Select your product type and view contact information for the Vertiv technical support that can help you.</p>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3">
                <div class="list">
                    <img src="image/4023-1.jpg" alt=""/>
                    <h4>Contact Technical Support</h4>
                    <p>Select your product type and view contact information for the Vertiv technical support that can help you.</p>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3">
                <div class="list">
                    <img src="image/4023-1.jpg" alt=""/>
                    <h4>Contact Technical Support</h4>
                    <p>Select your product type and view contact information for the Vertiv technical support that can help you.</p>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3">
                <div class="list">
                    <img src="image/4023-1.jpg" alt=""/>
                    <h4>Contact Technical Support</h4>
                    <p>Select your product type and view contact information for the Vertiv technical support that can help you.</p>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3">
                <div class="list">
                    <img src="image/4023-1.jpg" alt=""/>
                    <h4>Contact Technical Support</h4>
                    <p>Select your product type and view contact information for the Vertiv technical support that can help you.</p>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3">
                <div class="list">
                    <img src="image/4023-1.jpg" alt=""/>
                    <h4>Contact Technical Support</h4>
                    <p>Select your product type and view contact information for the Vertiv technical support that can help you.</p>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3">
                <div class="list">
                    <img src="image/4023-1.jpg" alt=""/>
                    <h4>Contact Technical Support</h4>
                    <p>Select your product type and view contact information for the Vertiv technical support that can help you.</p>
                </div>
            </div>
        </div>
    </div>
</div>