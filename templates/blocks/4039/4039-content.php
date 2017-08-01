<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="module-4039">
                <h3>Product Types</h3>
            </div>
        </div>
        <div class="col-xs-6 col-sm-4">
            <div class="module-4039">
                <img src="image/4039-1.jpg" alt=""/>
                <h4>Uninterruptible Power Supplies (UPS)</h4>
                <p>Protect your equipment and applications with our complete range of efficient, reliable UPS systems that can be configured to meet the specific needs of your critical applications.</p>
            </div>
        </div>
        <div class="col-xs-6 col-sm-4">
            <div class="module-4039">
                <img src="image/4039-1.jpg" alt=""/>
                <h4>Uninterruptible Power Supplies (UPS)</h4>
                <p>Protect your equipment and applications with our complete range of efficient, reliable UPS systems that can be configured to meet the specific needs of your critical applications.</p>
            </div>
        </div>
        <div class="col-xs-6 col-sm-4">
            <div class="module-4039">
                <img src="image/4039-1.jpg" alt=""/>
                <h4>Uninterruptible Power Supplies (UPS)</h4>
                <p>Protect your equipment and applications with our complete range of efficient, reliable UPS systems that can be configured to meet the specific needs of your critical applications.</p>
            </div>
        </div>
        <div class="col-xs-6 col-sm-4">
            <div class="module-4039">
                <img src="image/4039-1.jpg" alt=""/>
                <h4>Uninterruptible Power Supplies (UPS)</h4>
                <p>Protect your equipment and applications with our complete range of efficient, reliable UPS systems that can be configured to meet the specific needs of your critical applications.</p>
            </div>
        </div>
        <div class="col-xs-6 col-sm-4">
            <div class="module-4039">
                <img src="image/4039-1.jpg" alt=""/>
                <h4>Uninterruptible Power Supplies (UPS)</h4>
                <p>Protect your equipment and applications with our complete range of efficient, reliable UPS systems that can be configured to meet the specific needs of your critical applications.</p>
            </div>
        </div>
        <div class="col-xs-6 col-sm-4">
            <div class="module-4039">
                <img src="image/4039-1.jpg" alt=""/>
                <h4>Uninterruptible Power Supplies (UPS)</h4>
                <p>Protect your equipment and applications with our complete range of efficient, reliable UPS systems that can be configured to meet the specific needs of your critical applications.</p>
            </div>
        </div>
        <div class="col-xs-6 col-sm-4">
            <div class="module-4039">
                <img src="image/4039-1.jpg" alt=""/>
                <h4>Uninterruptible Power Supplies (UPS)</h4>
                <p>Protect your equipment and applications with our complete range of efficient, reliable UPS systems that can be configured to meet the specific needs of your critical applications.</p>
            </div>
        </div>
    </div>
</div>       


