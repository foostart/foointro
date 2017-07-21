<?php
    $url_host = $_SERVER['HTTP_HOST'];

    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
 <div class="module_2">
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
                                            about
                                        </a>
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
                                        <span class="slide-holder">
                                            <span class="block facebooksharebuttonblock ">
                                                <a class="facebook-share" href="#">
                                                    <span class="fa fa-print"></span>
                                                </a>
                                            </span>

                                        </span>
                                         <span class="slide-holder">
                                            <span class="block facebooksharebuttonblock ">
                                                <a class="facebook-share" href="#">
                                                    <span class="button">Subscribe</span>
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
                <div class="hero">
                    <div class="overlay-hero"></div>
                    <div class="info">
                        <h1 class="title">Welcome to Vertiv</h1>
                        <h2 class="description">Your Vision, Our Passion</h2>
                    </div>
                    <span>
                        <img src="image/12.jpg" alt=""/>
                    </span>
                </div>
            </div>
        </div>