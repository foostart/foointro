<?php
    $url_host = $_SERVER['HTTP_HOST'];

    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1">
    <div class="page-content">
        <div class="page-header-component ProductTypeList">
            <div class="mega-container">
                <div class="row">
                    <div class="col-sm-8 hidden-xs">
                        <ul class="breadcrumb x-smaller">
                            <li>
                                <a href="#">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Products
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Critical Power
                                </a>
                            </li>
                            <li class="active">
                                Uninterruptible Power Supplies (UPS)
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-4">
                        <div class="share-component primary-shade right noClick">
                            <span class="share-slide">
                                <span class="slide-holder">
                                    <span class="block facebooksharebuttonblock ">
                                        <a class="facebook-share" href="#">
                                            <span class="fa fa-facebook-official"></span>
                                        </a>
                                    </span>

                                </span>
                                <span class="slide-holder">
                                    <span class="block facebooksharebuttonblock ">
                                        <a class="facebook-share" href="#">
                                            <span class="fa fa-twitter"></span>
                                        </a>
                                    </span>

                                </span>
                                <span class="slide-holder">
                                    <span class="block facebooksharebuttonblock ">
                                        <a class="facebook-share" href="#">
                                            <span class="fa fa-linkedin-square"></span>
                                        </a>
                                    </span>

                                </span>
                                <span class="slide-holder">
                                    <span class="block facebooksharebuttonblock ">
                                        <a class="facebook-share" href="#">
                                            <span class="fa fa-google-plus"></span>
                                        </a>
                                    </span>

                                </span>
                                <span class="slide-holder">
                                    <span class="block facebooksharebuttonblock ">
                                        <a class="facebook-share" href="#">
                                            <span class="fa fa-envelope-o"></span>
                                        </a>
                                    </span>

                                </span>
                                <span class="share-but x-dark fa fa-share-square-o visible-xs">                                           
                                </span>

                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-type-list-page">
            <div class="hero-page-component">
                <div class="overlay-hero"></div>
                <div class="hero-page-info">
                    <h2 class="smaller dark subtitle hero-page-subtitle x-light m-t-0">Critical Power</h2>
                    <h1 class="h2 hero-page-main-title">Uninterruptible Power Supplies (UPS)</h1>
                </div>
                <img src="image/1_1.jpg" alt=""/>
            </div>
            <div class="editor-content-component">
                <div class="container">
                    <p>
                        Your UPS is too important to “make do” with a system that isn’t quite right. With unit capacities ranging from less than 1 kW to more than 1 MW, we offer a complete range of efficient, reliable UPS systems that can be configured to meet the specific needs of your critical applications.
                    </p>
                </div>
            </div>
            
        </div>
    </div>
</div>
